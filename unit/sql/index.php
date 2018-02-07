<?php
/**
 * module-testcase:/unit/sql/index.php
 *
 * @creation  2018-01-10
 * @version   1.0
 * @package   module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	...
include(__DIR__.'/../common.php');

/* @var $DB DB */
if(!$DB = Unit::Factory('DB')){
	throw new Exception("Error");
}

//	...
if(!$DB->Connect( Env::Get('testcase') ) ){
	throw new Exception("Error");
}

//	...
if(!Unit::Load('sql')){
	throw new Exception("Error");
}

/* @var $SQL SQL */
if(!$SQL = Unit::Factory('SQL')){
	throw new Exception("Error");
}

//	...
$target = ifset($_GET['target']);
foreach( ['insert','select','update','delete'] as $key ){
	//	...
	if( $target && $target !== $key ){
		continue;
	}

	//	...
	include("{$key}.php");
}
