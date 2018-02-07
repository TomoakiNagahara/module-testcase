<?php
/**
 * module-testcase:/unit/form/index.php
 *
 * @creation  2018-01-12
 * @version   1.0
 * @package   module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	...
include(__DIR__.'/../common.php');

//	...
if(!$form = Unit::Load('form')){
	throw new Exception("Error");
}

/* @var $form Form */
if(!$form = Unit::Factory('Form')){
	throw new Exception("Error");
}

//	...
$form->Config('./config.php');

//	...
Template::Run('index.phtml',['form'=>$form]);
