<?php
/**
 * module-testcase:/validate/index.php
 *
 * @creation  2017-08-25
 * @version   1.0
 * @package   app-skeleton
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	...
$request = Http::Request();

//	...
$form['input']['number'] = [
	'validate' => 'required, number, min(20), max(99)',
];
$form['input']['phone'] = [
		'validate' => 'required, phone',
];
$form['input']['email'] = [
	'validate' => 'required, email',
];
$form['input']['string'] = [
	'validate' => 'required, english, short(10), long(99), ',
];

//	...
if(!Unit::Load('validate') ){
	return;
}

//	...
Html::P('Validation result');
D(Validate::Validation($form, $request, []));
?>
<form>
	<div role="table">
		<div>
			<div>Number</div>
			<div><input type="text" name="number" value="<?= ifset($request['number']) ?>" /></div>
		</div>
		<div>
			<div>Phone</div>
			<div><input type="text" name="phone" value="<?= ifset($request['phone']) ?>" /></div>
		</div>
		<div>
			<div>E-Mail</div>
			<div><input type="text" name="email" value="<?= ifset($request['email']) ?>" /></div>
		</div>
		<div>
			<div>String (english)</div>
			<div><input type="text" name="string" value="<?= ifset($request['string']) ?>" /></div>
		</div>
		<div>
			<div></div>
			<div><button> Submit! </button></div>
		</div>
	</div>
</form>
<style>
div[role="table"] {
	margin: 1em;
}

div[role="table"] > div > div:first-child {
	text-align: center;
	font-weight: bold;
}

div[role="table"] > div > div:nth-child(2) {
	padding: 0.3em 1em;
}

input[type="text"] {
	width: 20em;
}
</style>
