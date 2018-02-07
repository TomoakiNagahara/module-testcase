<?php
/**
 * module-testcase:/unit/form/flow/config-error.php
 *
 * @creation  2018-01-25
 * @version   1.0
 * @package   module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	...
$config = [];
$config['default']['required']	 = 'Please input there. (Required)';
$config['default']['english']	 = 'Please input just English.';
$config['default']['alphabet']	 = 'Please input just Alphabet.';
$config['default']['email']		 = 'Wrong EMail format.';
$config['default']['numeric']	 = 'This value is not numeric.';
$config['default']['min']		 = 'Minimum.';
$config['default']['max']		 = 'Maximum';
$config['default']['short']		 = 'So short.';
$config['default']['long']		 = 'So long.';
$config['default']['regex']		 = 'REGEX';
$config['default']['kana']		 = 'kana';
$config['default']['hiragana']	 = 'hiragana';
$config['default']['katakana']	 = 'katakana';
$config['default']['zenkaku']	 = 'zenkaku';
$config['default']['hankaku']	 = 'hankaku';
$config['message']['regex']		 = 'One sentence is too long.';

//	...
return $config;
