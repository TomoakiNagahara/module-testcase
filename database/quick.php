<?php
/**
 * app-skeleton-3:/html/testcase/database/quick.php
 *
 * @creation  2017-08-29
 * @version   1.0
 * @package   app-skeleton
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
/* @var $db DB */
//	Get many record.
D( $db->Quick(" test.t_test ", ['limit'=>3, 'offset'=>5, 'order'=>'id desc']) );

//	Get single record.
D( $db->Quick(" test.t_test ", ['limit'=>1]) );

//	Get selected column.
D( $db->Quick(" id <- test.t_test ", ['limit'=>1]) );
D( $db->Quick(" id, text, number <- test.t_test ", ['limit'=>3]) );
