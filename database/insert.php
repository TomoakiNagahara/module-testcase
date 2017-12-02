<?php
/**
 * app-skeleton-3:/html/testcase/database/insert.php
 *
 * @creation  2017-08-22
 * @version   1.0
 * @package   app-skeleton
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	Generate insert query.
$insert = [];
$insert['table'] = 't_test';
$insert['set']['number'] = 100;
$insert['set']['text']   = 'test';
$query = SQL\Insert::Get($insert, $db);

/* @var $db DB */
$record = $db->Query($query);

//	...
D($query);
D($record);
