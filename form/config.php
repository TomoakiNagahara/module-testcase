<?php
/**
 * module-testcase:/form/config.php
 *
 * @creation  2017-08-23
 * @version   1.0
 * @package   onepiece-framework.com
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

//	...
$form = [];
$form['name']	 = 'testcase';
$form['method']	 = 'post';
$form['action']	 = '';
$form['u8s']	 = true;

//	...
$form['input']['text'] = [
	'label'	 => 'One line text',
	'type'	 => 'text',
	'class'	 => 'text',
	'style'	 => '',
	'cookie' =>  true,
	'validate' => 'required, number, min(20), max(99)',
	'error' => [
		'number' => 'Only number.',
		'min'	 => 'Number is Minimum. (miximum to 20)',
		'max'	 => 'Number is Maximum. (maximum to 99)',
	],
];

//	...
$form['input']['textarea'] = [
	'label'	 => 'Multi line text',
	'type'	 => 'textarea',
	'class'	 => 'text',
	'style'	 => '',
	'cookie' =>  true,
	'validate' => 'required, english, short(20), long(200)',
	'error' => [
		'english' => 'Only english.',
		'short'	 => 'String is short. (minimum 20 character)',
		'long'	 => 'String is long. (maximum 200 character)',
	],
];

//	...
$form['input']['select'] = [
	'label'	 => 'Select menu',
	'type'	 => 'select',
	'class'	 => '',
	'style'	 => '',
	'cookie' =>  true,
	'validate' => 'required',
	'option' => [
		['label'=>'' , 'value'=>'' ],
		['label'=>'A', 'value'=>'A'],
		['label'=>'B', 'value'=>'B'],
	],
];

//	...
$form['input']['radio'] = [
	'label'	 => 'Radio button',
	'type'	 => 'radio',
	'class'	 => '',
	'style'	 => '',
	'cookie' =>  true,
	'validate' => 'required',
	'values' => [
		['label'=>'A', 'value'=>'A'],
		['label'=>'B', 'value'=>'B'],
	],
];

//	...
$form['input']['checkbox'] = [
	'label'	 => 'Checkbox',
	'type'	 => 'checkbox',
	'class'	 => '',
	'style'	 => '',
	'cookie' =>  true,
	'validate' => 'required',
	'values' => [
		['label'=>'A', 'value'=>'A'],
		['label'=>'B', 'value'=>'B'],
	],
];

//	...
$form['input']['agree'] = [
	'label'	 => 'I agree with the Terms & Conditions',
	'type'	 => 'checkbox',
	'class'	 => '',
	'style'	 => '',
	'value'	 => 'yes',
	'cookie' =>  false,
	'validate' => 'required',
	'error' => [
		'required' => 'You can not be used if no agreement.',
	],
];

//	...
$form['input']['submit'] = [
	'label'	 => 'Submit button',
	'type'	 => 'button',
	'value'	 => ' Do submit!! '
];

//	...
return $form;
