<?php
/**
 * app-skeleton-3:/html/testcase/session/index.php
 *
 * @creation  2017-08-23
 * @version   1.0
 * @package   app-skeleton
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

//	Test whether the session is running.
$_SESSION['test']++;
D($_SESSION['test']);

//	General to session load and save example.
$count = App::Session('count1');
$count++;
App::Session('count1', $count);
D($count);

//	Get reference value.
$count = &App::Session('count2');
$count++;
D($count);

//	...
D(__FILE__);
//D($_SESSION);
