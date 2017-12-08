<?php
/**
 * module-testcase:/database/delete.php
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
	$delete = [];
	$delete['table'] = 't_test';
	$delete['where']['id'] = $id;
	$delete['limit'] = 1;
	if( $query = SQL\Delete::Get($delete, $db) ){
		//	...
		$record = $db->Query($query);
		D($record);
	}
}

//	...
D($db->GetQueries());
