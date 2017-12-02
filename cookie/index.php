<?php
/**
 * app-skeleton-3:/html/testcase/cookie/index.php
 *
 * @creation  2017-08-23
 * @version   1.0
 * @package   app-skeleton
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	...
D(__FILE__);

$count = Cookie::Get('count');
$count += 1;
Cookie::Set('count', $count);

D($count);
D($_COOKIE);
