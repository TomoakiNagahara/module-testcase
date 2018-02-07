<?php
/**
 * module-testcase:/unit/form/flow/index.php
 *
 * @creation  2018-01-23
 * @version   1.0
 * @package   module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	...
include(__DIR__.'/../../common.php');

//	...
if(!$form = Unit::Load('form')){
	throw new Exception("Error");
}

/* @var $form OP\UNIT\Form */
if(!$form = Unit::Factory('Form')){
	throw new Exception("Error");
}

//	...
$form->Config('./config-form.php');

//	...
$args = [];
$args['form'] = $form;
$args['errors'] = [];

//	...
switch( $action = Router::Args(0) ){
	case '':
	case 'form':
		$action = 'form';
		break;

	case 'confirm':
		if( $form->Token() or false ){
			if( Unit::Load('validate') ){
				if( $io = OP\UNIT\Validate::Evaluations('config-validate.php', $form->Values(), $args['errors']) ){
					$form->Session('confirm', $form->Values());
				}else{
					$action = 'form';
				}
			}
		}else{
			$action = 'form';
		}
		break;

	case 'commit':
		if( $values = $form->Session('confirm') ){
			/**
			 * Please write database access or send email or other.
			 */
			if( $form->Clear() === false ? false:true ){
				$form->Session('commit', true);
				$action = 'conversion';
			}
		}else{
			$action = 'form';
		}
		break;

	case 'conversion':
		$action = $form->Session('commit') ? 'conversion': 'form';
		break;

	case 'init':
		$action = 'form';
	case 'thanks':
		$form->Clear();
		$form->Session('confirm', null);
		$form->Session('commit' , null);
		break;

	default:
		D("Has not been define. ($action)");
		$action = 'form';
}

//	...
Template::Run("navigation.phtml");
Template::Run("{$action}.phtml", $args);
