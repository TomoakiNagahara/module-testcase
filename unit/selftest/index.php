<?php
/**
 * module-testcase:/unit/selftest/index.php
 *
 * @creation  2017-12-09
 * @version   1.0
 * @package   module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	...
if(!Env::isAdmin() ){
	Html::E("You are not an administrator.");
	return;
}

//	...
if(!Unit::Load('selftest') ){
	return;
}

//	...
$configs = include('config.php');

//	...
\OP\UNIT\SELFTEST\Inspector::Auto($configs);

//	...
Template::Run('index.phtml');
