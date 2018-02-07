<?php
/**
 * module-testcase:/unit/validate/config-validate.php
 *
 * @creation  2018-01-26
 * @version   1.0
 * @package   module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	...
$config = [];
$config['required']	 = 'required';
$config['short']	 = 'short(10)';
$config['long']		 = 'long(10)';
$config['min']		 = 'min(10)';
$config['max']		 = 'max(10)';

/*
$config['english']	 = 'english';
$config['alphabet']	 = 'alphabet';
$config['email']	 = 'email';
$config['regex']	 = 'regex(/[^\n]{20}/u)';
$config['alphanumeric']	 = 'alphabet+numeric';
$config['language']	 = '';
$config['kanji']	 = 'if(language=ja), han';
$config['kana']		 = 'if(language=ja), kana';
$config['hiragana']	 = 'if(language=ja), hiragana';
$config['katakana']	 = 'if(language=ja), katakana';
$config['kanji']	 = 'if(language=ja), han';
*/

//	...
return $config;
