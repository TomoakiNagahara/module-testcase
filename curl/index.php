<?php
/**
 * app-skeleton-3:/html/testcase/api/index.php
 *
 * @creation  2017-09-04
 * @version   1.0
 * @package   app-skeleton
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	...
$url  = 'http://local.uqunie.com/api/test/';
$data = ['test'=>1];

//	...
D( Curl::Get( $url, $data) );
D( Curl::Post($url, $data) );
