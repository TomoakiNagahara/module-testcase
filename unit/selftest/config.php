<?php
/**
 * module-testcase:/unit/selftest/config.php
 *
 * @creation  2017-12-09
 * @version   1.0
 * @package   module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	...
$config = [];

//	...
$user = [
	'driver' => 'mysql',
	'host'	 => 'localhost',
	'port'	 => '3306',
	'user'	 => 'testcase',
	'password'=>'hogehoge',
	'charset'=> 'utf8',
];

//	...
$user['databases']['testcase']['tables']['t_test']['privileges'] = ['insert','select','update','delete'];

//	...
$config['users'][] = $user;

//	...
$table['columns']['ai'] = [
	'type'   => 'int',
	'comment'=> 'Auto increment',
];
$table['columns']['id'] = [
	'type'   => 'char',
	'length' =>  8,
	'index'  => 'unique',
	'comment'=> 'Unique ID',
];
$table['columns']['tag'] = [
	'type'   => 'varchar',
	'length' =>  10,
	'index'  => 'index',
	'comment'=> 'For search tag',
];
$table['columns']['number'] = [
	'type'   => 'int',
	'index'  => 'index',
	'comment'=> '',
];
$table['columns']['text'] = [
	'type'   => 'text',
	'index'  => 'fulltext',
	'comment'=> 'Free text',
];
$table['columns']['timestamp'] = [
	'type'   => 'timestamp',
	'comment'=> '',
];
$table['ai'] = 'ai';
$table['indexes'][] = '';
$table['comment'] = 'This is test table.';

//	...
$database['tables']['t_test'] = $table;
$database['charset'] = 'utf8mb4';
$database['collate'] = 'utf8mb4_general_ci';
$database['comment'] = 'This is test database.';

//	...
$structure['databases']['testcase'] = $database;

//	...
$config['structures'][] = $structure;

//	...
return $config;
