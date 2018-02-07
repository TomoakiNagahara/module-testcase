<?php
/**
 * module-testcase:/unit/sql/insert.php
 *
 * @creation  2018-01-11
 * @version   1.0
 * @package   module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
/* @var $DB DB */

//	COUNT
$select = [];
$select['table'] = 't_test';
$delete['limit'] = 1;
$select['where']['ai']['value'] = null;
$select['where']['ai']['evalu'] = '!=';
$before = $DB->Query( $SQL->Count($select, $DB), 'count' );

//	INSERT
$insert = [];
$insert['table'] = 't_test';
$insert['set']['tag']  = 'test';
$insert['set']['text'] = 'test';
$query  = $SQL->Insert($insert, $DB);
$result = $DB->Query($query);

//	COUNT
$select = [];
$select['table'] = 't_test';
$delete['limit'] = 1;
$select['where']['ai']['value'] = null;
$select['where']['ai']['evalu'] = '!=';
$after = $DB->Query( $SQL->Count($select, $DB), 'count' );

//	...
Html::Tag('div', "SQL: {$query}\n New insert auto increment id: {$result}\n Records: {$before} --> {$after}");
