<?php
/**
 * module-testcase:/functions/index.php
 *
 * @creation  2017-08-28
 * @version   1.0
 * @package   app-skeleton
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

//	OP

//	App
$path = __DIR__;
D( CompressPath($path) );

//	Doc
$path = __DIR__;
D( CompressPath($path) );

//	Unit
$path = realpath( Env::Get(Unit::_DIRECTORY_) ) . '/test/index.php';
D( CompressPath($path) );
