<?php
/**
 * module-testcase:/index.php
 *
 * @creation  2017-08-22
 * @version   1.0
 * @package   app-skeleton
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	...
include('common.php');
?>
<!-- menu -->
<?php include('menu.phtml') ?>

<!-- phpinfo -->
<?php
//	...
if( Env::isAdmin() ){
	phpinfo();
}
