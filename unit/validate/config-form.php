<?php
/**
 * module-testcase:/unit/validate/config.php
 *
 * @creation  2018-01-12
 * @version   1.0
 * @package   module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	...
$form = [];
$form['name'] = 'testcase-validate';

//	...
$input = [];
$input['name']  = 'required';
$input['type']  = 'text';
$input['label'] = 'Required';
$input['value'] = '';
$form['input'][$input['name']] = $input;

//	...
return $form;
