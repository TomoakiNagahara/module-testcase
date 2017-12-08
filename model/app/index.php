<?php
/**
 * module-testcase:/model/app/index.php
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
App::Title('App');

//	...
$id  = App::UserId();
$key = Cookie::_Key('user-id');

//	...
D($key, $id);

//	...
D($_COOKIE);
