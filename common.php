<?php
/**
 * module-testcase:/common.php
 *
 * @creation  2017-11-21
 * @version   1.0
 * @package   app-skeleton
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	...
Template::Run('../common.php');

//	...
App::Title('testcase');

//	...
if(!Env::isAdmin() ){
	exit();
}

//	...
if(!Env::Get('testcase')){
	//	...
	$config = [
		'driver'   => 'mysql',
		'port'     => '3306',
		'host'     => 'localhost',
		'user'     => 'testcase',
		'password' => 'testcase',
		'database' => 'testcase',
		'charset'  => 'utf8',
	];

	//	...
	Env::Set('testcase', $config);
}
?>
<!-- Up -->
<div>
	<a href="../">UP</a>
</div>
