<?php
/**
 * module-testcase:/unit/sql/delete.php
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

//	DELETE
$delete = [];
$delete['table'] = 't_test';
$delete['limit'] = 1;
$delete['where']['updated']['value'] = null;
$delete['where']['updated']['evalu'] = '!=';
$query  = $SQL->Delete($delete, $DB);
$result = $DB->Query($query);

//	COUNT
$select = [];
$select['table'] = 't_test';
$delete['limit'] = 1;
$select['where']['ai']['value'] = null;
$select['where']['ai']['evalu'] = '!=';
$after = $DB->Query( $SQL->Count($select, $DB), 'count' );

//	...
Html::Tag('div', "SQL: {$query}\n Delete: {$result}\n Records: {$before} --> {$after}");
