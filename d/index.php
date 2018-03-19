<?php
/**
 * module-testcase:/d/index.php
 *
 * @creation  2017-08-30
 * @version   1.0
 * @package   app-skeleton
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	...
D(null, true, false, 0, "0", " 0", "0 ", " 0 ", "CR\r LF\n TAB\t");

//	...
$temp['null'] = null;
$temp['boolean'][] = true;
$temp['boolean'][] = false;
$temp['number'][] =  0;
$temp['number'][] =  0.1;
$temp['number'][] =  1;
$temp['number'][] = "1";
$temp['number'][] = "0 ";
$temp['string'][] = 'This is test string.';
$temp['string'][] = 'null';
$temp['string'][] = 'true';
$temp['string'][] = 'false';
$temp['string'][] = 'WHITE SPACE';
$temp['string'][] = ' ';
$temp['string'][] = '0';
$temp['string'][] = '0 ';
$temp['string'][] = ' 0';
$temp['string'][] = ' 0 ';
$temp['string'][] = "CR\r";
$temp['string'][] = "LF\n";
$temp['string'][] = "TAB\t";
$temp['string'][] = '';		// Empty string
$temp['string'][] = '<script>alert("XSS");</script>';	// XSS
$temp['array'] = ['apple','kiwi','orange',['banana','pineapple']];
$temp['assoc']['foo'] = ['bar',['hoge'=>'hoge']];

//	...
D($temp);
