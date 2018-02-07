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

//	SELECT SINGLE RECORD
$select = [];
$select['table'] = 't_test';
$select['limit'] = 1;
$select['where']['ai'] = 1;
$query  = $SQL->Select($select, $DB);
$record = $DB->Query($query);
D($query, $record);

//	SELECT MULTI RECORD
$select = [];
$select['table'] = 't_test';
$select['limit'] = 2;
$select['offset']= 1;
$select['where']['ai']['value'] = 1;
$select['where']['ai']['evalu'] = '>=';
$query  = $SQL->Select($select, $DB);
$record = $DB->Query($query);
D($query, $record);

//	SELECT NULL RECORD
$select = [];
$select['table'] = 't_test';
$select['limit'] = 1;
$select['where']['updated'] = null;
$query  = $SQL->Select($select, $DB);
$record = $DB->Query($query);
D($query, $record);

//	SELECT NOT NULL RECORD
$select = [];
$select['table'] = 't_test';
$select['limit'] = 1;
$select['where']['updated']['value'] = null;
$select['where']['updated']['evalu'] = '!=';
$query  = $SQL->Select($select, $DB);
$record = $DB->Query($query);
D($query, $record);

//	SELECT BETWEEN
$select = [];
$select['table'] = 't_test';
$select['limit'] = 2;
$select['where']['ai']['value'] = '1 TO 1000';
$select['where']['ai']['evalu'] = 'between';
$query  = $SQL->Select($select, $DB);
$record = $DB->Query($query);
D($query, $record);

//	SELECT IN
$select = [];
$select['table'] = 't_test';
$select['limit'] = 2;
$select['where']['tag']['value'] = 'test, foo, bar';
$select['where']['tag']['evalu'] = 'in';
$query  = $SQL->Select($select, $DB);
$record = $DB->Query($query);
D($query, $record);

//	SELECT IN
$select = [];
$select['table'] = 't_test';
$select['limit'] = 2;
$select['where']['tag']['value'] = 'test, foo, bar';
$select['where']['tag']['evalu'] = 'not in';
$query  = $SQL->Select($select, $DB);
$record = $DB->Query($query);
D($query, $record);
