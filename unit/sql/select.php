<?php
/**
 * module-testcase:/unit/sql/select.php
 *
 * @creation  2018-01-11
 * @version   1.0
 * @package   module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
/* @var $DB  \OP\UNIT\DB  */
/* @var $SQL \OP\UNIT\SQL */

//	table name
$table = 't_table';

//	COUNT NUMBER OF RECORD
$select = [];
$select['table'] = $table;
$select['where']['ai']['value'] = 1;
$select['where']['ai']['evalu'] = '>=';
$query = $SQL->Count($select, $DB);
$count = $DB->Query($query, 'count');
D($query, "count=$count");

//	SELECT CURRENT MAX AI
$select = [];
$select['table'] = $table;
$select['column'] = 'max(ai)';
$select['where']['ai']['value'] = 1;
$select['where']['ai']['evalu'] = '>=';
$select['limit'] = 1;
$query  = $SQL->Select($select, $DB);
$result = $DB->Query($query, 'select');
$ai_max = $result['MAX(`AI`)'];
D($query, $result, $ai_max);

//	SELECT SINGLE RECORD
$select = [];
$select['table'] = $table;
$select['limit'] = 1;
$select['where']['ai'] = 1;
$query  = $SQL->Select($select, $DB);
$record = $DB->Query($query);
D($query, $record);

//	SELECT MULTI RECORD
$select = [];
$select['table'] = $table;
$select['limit'] = 2;
$select['offset']= 1;
$select['where']['ai']['value'] = 1;
$select['where']['ai']['evalu'] = '>=';
$query  = $SQL->Select($select, $DB);
$record = $DB->Query($query);
D($query, $record);

//	SELECT NULL RECORD
$select = [];
$select['table'] = $table;
$select['limit'] = 1;
$select['where']['updated'] = null;
$query  = $SQL->Select($select, $DB);
$record = $DB->Query($query);
D($query, $record);

//	SELECT NOT NULL RECORD
$select = [];
$select['table'] = $table;
$select['limit'] = 1;
$select['where']['updated']['value'] = null;
$select['where']['updated']['evalu'] = '!=';
$query  = $SQL->Select($select, $DB);
$record = $DB->Query($query);
D($query, $record);

//	SELECT BETWEEN
$select = [];
$select['table'] = $table;
$select['limit'] = 2;
$select['where']['ai']['value'] = '1 TO 1000';
$select['where']['ai']['evalu'] = 'between';
$query  = $SQL->Select($select, $DB);
$record = $DB->Query($query);
D($query, $record);

//	SELECT IN
$select = [];
$select['table'] = $table;
$select['limit'] = 2;
$select['where']['tag']['value'] = 'test, foo, bar';
$select['where']['tag']['evalu'] = 'in';
$query  = $SQL->Select($select, $DB);
$record = $DB->Query($query);
D($query, $record);

//	SELECT IN
$select = [];
$select['table'] = $table;
$select['limit'] = 2;
$select['where']['tag']['value'] = 'test, foo, bar';
$select['where']['tag']['evalu'] = 'not in';
$query  = $SQL->Select($select, $DB);
$record = $DB->Query($query);
D($query, $record);
