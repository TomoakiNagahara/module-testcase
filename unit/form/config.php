<?php
/**
 * module-testcase:/unit/form/config.php
 *
 * @creation  2018-01-12
 * @version   1.0
 * @package   module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	...
$form = [];
$form['name'] = 'testcase';

//	...
$input = [];
$input['name']  = 'text';
$input['type']  = 'text';
$input['label'] = 'TEXT';
$input['value'] = '<h1>XSS';
$form['input'][$input['name']] = $input;

//	...
$input = [];
$input['name']  = 'textarea';
$input['type']  = 'textarea';
$input['label'] = 'TEXTAREA';
$input['value'] = '<h1>XSS';
$form['input'][$input['name']] = $input;

//	...
$input = [];
$input['name']  = 'checkbox';
$input['type']  = 'checkbox';
$input['label'] = 'CHECKBOX';
$input['values'][] = ['label'=>'Yes'    , 'value'=>'y'    ,'check'=>0];
$input['values'][] = ['label'=>'No'     , 'value'=>'n'    ,'check'=>0];
$input['values'][] = ['label'=>'<h1>XSS', 'value'=>'"XSS<','check'=>1];
$form['input'][$input['name']] = $input;

//	...
$input = [];
$input['name']  = 'radio';
$input['type']  = 'radio';
$input['label'] = 'RADIO';
$input['values'][] = ['label'=>'Yes'    , 'value'=>'y'     ];
$input['values'][] = ['label'=>'No'     , 'value'=>'n'     ];
$input['values'][] = ['label'=>'<h1>XSS', 'value'=>'"XSS<"'];
$form['input'][$input['name']] = $input;

//	...
$input = [];
$input['name']  = 'select';
$input['type']  = 'select';
$input['label'] = 'SELECT';
$input['values'][] = [];
$input['values'][] = ['label'=>'Zero'   , 'value'=>0       , 'check'=>1];
$input['values'][] = ['label'=>'One'    , 'value'=>1       , 'check'=>0];
$input['values'][] = ['label'=>'<h1>XSS', 'value'=>'"XSS<"', 'check'=>0];
$form['input'][$input['name']] = $input;

//	...
$input = [];
$input['name']  = 'multiple';
$input['type']  = 'select';
$input['label'] = 'MULTIPLE';
$input['multiple'] = true;
$input['values'][] = ['label'=>'Zero' , 'value'=>'0', 'check'=>true];
$input['values'][] = ['label'=>'One'  , 'value'=>'1', 'check'=>true];
$input['values'][] = ['label'=>'Two'  , 'value'=>'2', 'check'=>true];
$input['values'][] = ['label'=>'Three', 'value'=>'3', 'check'=>true];
$form['input'][$input['name']] = $input;

//	...
$input = [];
$input['name']  = 'file';
$input['type']  = 'file';
$input['label'] = 'FILE';
$form['input'][$input['name']] = $input;

//	...
$input = [];
$input['name']  = 'button';
$input['type']  = 'button';
$input['label'] = 'BUTTON';
$input['values'][] = ['value'=>' Yes '];
$input['values'][] = ['value'=>' No  '];
$form['input'][$input['name']] = $input;

//	...
$input = [];
$input['name']  = 'submit';
$input['type']  = 'submit';
$input['label'] = 'SUBMIT';
$input['values'][] = ['value'=>'Yes'];
$input['values'][] = ['value'=>'No' ];
$form['input'][$input['name']] = $input;

//	...
$input = [];
$input['name']  = 'cookie';
$input['type']  = 'checkbox';
$input['label'] = 'COOKIE';
$input['cookie'] = true;
$input['values'][] = ['label'=>'Save to cookie.','value'=>1];
$form['input'][$input['name']] = $input;

//	...
$input = [];
$input['name']  = 'session';
$input['type']  = 'submit';
$input['label'] = 'SESSION';
$input['value'] = 'Discard Session';
$input['session'] = false;
$form['input'][$input['name']] = $input;

//	...
return $form;
