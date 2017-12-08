<?php
/**
 * module-testcase:/database/index.php
 *
 * @creation  2017-08-22
 * @version   1.0
 * @package   app-skeleton
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
/* @var $db DB */
if( $db = Unit::Factory('db') ){
	//	Connect to database.
	if(!$config = Env::Get('database') ){
		Notice::Set("Has not been set database config.\nExample: Env::Set('database', [...])");
		return;
	}
	if(!$db->Connect($config)){
		return;
	}
}else{
	return;
}

//	...
if(!Unit::Load('sql')){
	return;
}

//	...
$table = Router::Get();

//	...
switch( $arg = ifset($table['args'][0], '') ){
	case '':
		break;

	case 'app':
	case 'quick':
	case 'insert':
	case 'select':
	case 'update':
	case 'delete':
		include("{$arg}.php");
		D($db->GetQueries());
		break;

	default:
		D("Does not define this action. ($arg)");
}

//	...
include('menu.phtml');
