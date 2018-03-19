<?php
/**
 * module-testcase:/unit/i18n/index.php
 *
 * @creation  2018-02-16
 * @version   1.0
 * @package   module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	...
include(__DIR__.'/../common.php');

/* @var $i18n OP\UNIT\i18n */
if(!$i18n = Unit::Factory('i18n')){
	throw new Exception("Error");
}

//	...
$source    = 'This is my apple.';
$translate = $i18n->Translate($source, 'ja', 'en');
Html::P("$source --> $translate");
