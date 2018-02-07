<?php
/**
 * module-testcase:/unit/sql/update.php
 *
 * @creation  2018-01-11
 * @version   1.0
 * @package   module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
/* @var $DB DB */

//	UPDATE
$update = [];
$update['table'] = 't_test';
$update['limit'] = 1;
$update['set']['text']    = 'updated';
$update['set']['updated'] = Time::Datetime();
$update['where']['updated'] = null;
$query  = $SQL->Update($update, $DB);
$result = $DB->Query($query);
Html::Tag('div', "SQL: $query\n Update: $result");
