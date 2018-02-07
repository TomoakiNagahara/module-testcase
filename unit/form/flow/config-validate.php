<?php
/**
 * module-testcase:/unit/form/flow/config-validate.php
 *
 * @creation  2018-01-24
 * @version   1.0
 * @package   module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	...
$config = [];
$config['nickname'] = 'required, english';
$config['uniqueid'] = 'required, alphanumeric';
$config['mailaddr'] = 'required, email';
$config['japanese'] = 'required';
$config['kana']     = 'if(japanese), required, kana';
$config['hiragana'] = 'if(japanese), required, hiragana';
$config['katakana'] = 'if(japanese), required, katakana';
$config['message']  = 'required, short(20), long(100), regex(/[^\n]{20}/u)';
$config['gender']   = 'required';
$config['age']      = 'required, min(20), max(40)';
$config['agree']    = 'required';

//	...
return $config;
