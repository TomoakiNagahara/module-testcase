<?php
/**
 * module-testcase:/form/index.php
 *
 * @creation  2017-08-23
 * @version   1.0
 * @package   app-skeleton
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
/* @var $form Form */
if( $form = Unit::Factory('form') ){
	$form->Load('config.php');
	$form->Test();
}else{
	throw new Exception("Factory of form unit has failed.");
}

//	...
$request = Http::Request();

//	...
if( $form->Token() ){
	//	...
	if( Unit::Load('validate') ){
		//	...
		$errors = Validate::Validation($form->Config(), $request, $form->Save());

		//	...
		$form->Validation($errors);

		//	...
		if( empty($errors) ){
			$form->Save($request);
		}
	}
}else{
	$errors['token'] = true;
}

//	...
if( empty($errors) ){
	$route = Router::Get();
	switch( ifset($route['args'][0]) ){
		case 'conversion':
			include('conversion.phtml');
			break;

		default:
			include('confirm.phtml');
	}
}else{
	include('form.phtml');
}
?>
<link rel="stylesheet" type="text/css" href="form.css" />
