<?php
/**
 * module-testcase:/database/update.php
 *
 * @creation  2017-08-22
 * @version   1.0
 * @package   app-skeleton
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
/* @var $db DB */
$id = $db->Quick(" id <- t_test ",['limit'=>1]);
D($id);

//	...
if( $id ){
	$update = [];
	$update['table'] = 't_test';
	$update['set']['text'] = 'updated';
	$update['where']['id'] = $id;
	$update['limit'] = 1;
	if( $query  = SQL\Update::Get($update, $db) ){
		$result = $db->Query($query);
		D("Updated record is $result.");
	}
}

//	...
D($db->GetQueries());
