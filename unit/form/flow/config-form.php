<?php
/**
 * module-testcase:/unit/form/flow/config-form.php
 *
 * @creation  2018-01-12
 * @version   1.0
 * @package   module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	...
$form = [];
$form['name'] = 'testcase-flow';

//	...
$input = [];
$input['label'] = 'Nickname';
$input['name']  = 'nickname';
$input['type']  = 'text';
$input['placeholder'] = 'Your nickname';
$form['input'][$input['name']] = $input;

//	...
$input = [];
$input['label'] = 'Japanese';
$input['name']  = 'japanese';
$input['type']  = 'radio';
$input['values'][] = ['label'=>'Yes', 'value'=>'1'];
$input['values'][] = ['label'=>'No' , 'value'=>'0'];
$form['input'][$input['name']] = $input;

//	...
$input = [];
$input['label'] = 'Japanese kana';
$input['name']  = 'kana';
$input['type']  = 'text';
$input['placeholder'] = 'Hiragana and katakana';
$form['input'][$input['name']] = $input;

//	...
$input = [];
$input['label'] = 'Hiragana';
$input['name']  = 'hiragana';
$input['type']  = 'text';
$input['placeholder'] = 'Hiragana only.';
$form['input'][$input['name']] = $input;

//	...
$input = [];
$input['label'] = 'Katakana';
$input['name']  = 'katakana';
$input['type']  = 'text';
$input['placeholder'] = 'Katakana only.';
$form['input'][$input['name']] = $input;

//	...
$input = [];
$input['label'] = 'Unique ID';
$input['name']  = 'uniqueid';
$input['type']  = 'text';
$input['placeholder'] = 'Alphabet only';
$form['input'][$input['name']] = $input;

//	...
$input = [];
$input['label'] = 'EMail address';
$input['name']  = 'mailaddr';
$input['type']  = 'text';
$input['placeholder'] = 'Your EMail address';
$form['input'][$input['name']] = $input;

//	...
$input = [];
$input['label'] = 'Message';
$input['name']  = 'message';
$input['type']  = 'textarea';
$input['placeholder'] = 'Tell us about you think';
$form['input'][$input['name']] = $input;

//	...
$input = [];
$input['label'] = 'Age';
$input['name']  = 'age';
$input['type']  = 'text';
$input['placeholder'] = 'Your age';
$form['input'][$input['name']] = $input;

//	...
$input = [];
$input['label'] = 'Gender';
$input['name']  = 'gender';
$input['type']  = 'radio';
$input['values'][] = ['label'=>'Male'  , 'value'=>'male'];
$input['values'][] = ['label'=>'female', 'value'=>'female'];
$form['input'][$input['name']] = $input;

//	...
$input = [];
$input['label'] = 'Agreement';
$input['name']  = 'agree';
$input['type']  = 'checkbox';
$input['values'][] = ['label'=>'Agree', 'value'=>'yes'];
$form['input'][$input['name']] = $input;

//	...
$input = [];
$input['label']  = '';
$input['name']  = 'submit';
$input['type']  = 'submit';
$input['values'][] = ['value'=>'Confirmation'];
$form['input'][$input['name']] = $input;

//	...
return $form;
