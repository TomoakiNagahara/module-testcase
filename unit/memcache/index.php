<?php
/**
 * module-testcase:/unit/memcache/index.php
 *
 * @creation  2018-02-07
 * @version   1.0
 * @package   module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	...
include(__DIR__.'/../common.php');

//  ...
if(!Unit::Load('memcache') ){
    return;
}

//  ...
$count = OP\UNIT\Memcache::Get('count');
$count = 1 + (int)$count;
OP\UNIT\Memcache::Set('count', $count, 60*60*24);
D($count);
