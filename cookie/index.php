<?php
/**
 * module-testcase:/cookie/index.php
 *
 * @creation  2017-08-23
 * @version   1.0
 * @package   app-skeleton
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	...
D(__FILE__);

$count = Cookie::Get('count', 0);
D($count);

$count += 1;
D($count);

Cookie::Set('count', $count);
D($_COOKIE);
