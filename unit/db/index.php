<?php
/**
 * module-testcase:/unit/coin/index.php
 *
 * @creation  2018-01-02
 * @version   1.0
 * @package   module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	...
include(__DIR__.'/../common.php');

//	...
if(!Unit::Load('db')){
	throw new Exception("Error");
}

/* @var $DB DB */
if(!$DB = Unit::Factory('DB')){
	throw new Exception("Error");
}

//	...
$config = Env::Get('testcase');

//	...
if(!$DB->Connect($config) ){
	throw new Exception("Error");
}

//	...
if( $record = $DB->Quick(' t_test ', ['limit'=>10, 'offset'=>0, 'order'=>'number desc']) ){
	D($record);
}else{
	throw new Exception('Error');
}

//	...
if( $record = $DB->Quick(' t_test.ai > 1 ', ['limit'=>1]) ){
	D($record);
}else{
	throw new Exception('Error');
}

//	...
if( $record = $DB->Quick(' ai <- t_test.ai > 1 ', ['limit'=>1]) ){
	D($record);
}else{
	throw new Exception('Error');
}

//	...
if( $record = $DB->Quick(' text, number <- t_test.ai > 1 ', ['limit'=>3]) ){
	D($record);
}else{
	throw new Exception('Error');
}

//	...
D($DB->GetQueries());
