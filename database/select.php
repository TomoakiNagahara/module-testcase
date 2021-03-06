<?php
/**
 * module-testcase:/database/select.php
 *
 * @creation  2017-08-22
 * @version   1.0
 * @package   app-skeleton
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	Generate select query.
$select = [];
$select['table'] = 't_test';
$select['where']['id']['evalu'] = '>';
$select['where']['id']['value'] =  0;
$select['limit'] = 10;
$query = SQL\Select::Get($select, $db);

/* @var $db DB */
$record = $db->Query($query);

//	...
D($record);
D($db->GetQueries());
