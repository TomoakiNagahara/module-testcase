<?php
/**
 * module-testcase:/model/encrypt/index.php
 *
 * @creation  2017-11-22
 * @version   1.0
 * @package   app-skeleton
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	...
Template::Run('../common.php');

//	...
App::Title('Encrypt');

//	...
$str = "onepiece-framework";
$enc = Encrypt::Enc($str);
$dec = Encrypt::Dec($enc);

//	...
D($str, $enc, $dec);
