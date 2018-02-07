<?php
/**
 * module-testcase:/unit/validate/index.php
 *
 * @creation  2018-01-26
 * @version   1.0
 * @package   module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
/* @var $form OP\UNIT\Form */
//	...
include(__DIR__.'/../common.php');

//	...
if(!$form = Unit::Load('form')){
	throw new Exception("Error");
}

//	...
if(!$form = Unit::Load('validate')){
	throw new Exception("Error");
}

/* @var $form Form */
if(!$form = Unit::Factory('Form')){
	throw new Exception("Error");
}

//	...
$form->Config('config-form.php');

//	...
$values = $form->Values();

//	...
$io = OP\UNIT\Validate::Evaluations('config-validate.php', $values, $errors);

//	...
Template::Run('index.phtml',['form'=>$form, 'errors'=>$errors]);
