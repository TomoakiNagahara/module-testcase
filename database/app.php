<?php
/**
 * app-skeleton-3:/html/testcase/database/app.php
 *
 * @creation  2017-08-22
 * @version   1.0
 * @package   app-skeleton
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

//	...
$insert = [];
$insert['table'] = 't_test';
$insert['set']['number'] = 100;
$insert['set']['text']   = 'test';
$id = Database::Insert($insert);
D("Create new record id is $id.");

//	...
$update = [];
$update['table'] = 't_test';
$update['set']['text'] = 'updated';
$update['where']['text']['evalu'] = '!=';
$update['where']['text']['value'] = 'updated';
$update['limit'] = 1;
$number = Database::Update($update);
D("Updated record number is $number.");

//	...
$select = [];
$select['table'] = 't_test';
$select['where']['id']['evalu'] = '>';
$select['where']['id']['value'] = '0';
$select['limit'] = 10;
$record = Database::Select($select);
D($record);
