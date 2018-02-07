<?php
/**
 * module-testcase:/unit/orm/index.php
 *
 * @creation  2018-02-01
 * @version   1.0
 * @package   module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	...
include(__DIR__.'/../common.php');

/* @var $orm OP\UNIT\ORM */
if(!$orm = Unit::Factory('ORM')){
	throw new Exception("Error");
}

//	Connect to database.
$orm->Connect( Env::Get('testcase') );

//	Generate "Record" Object.
if( $ai = ifset($_GET['ai']) ){
	//	Find single record by QQL. (QQL is "Quick Query Language")
	$record = $orm->Find("t_table.ai = $ai");
}else{
	//	Generate Empty "Record" Object.
	$record = $orm->Create("t_table");
}

//	Save to database by Record object.
$io = $orm->Save($record);

//	Create new record was successful.
if( !$ai and $io ){
	Http::Location("?ai=$io");
	return;
}

//	...
Template::Run('index.phtml', ['record'=>$record, 'save'=>$io]);

//	...
D( $orm, $record->Array() );
