<?php
/**
 * app-skeleton-3:/html/testcase/email/index.php
 *
 * @creation  2017-08-28
 * @version   1.0
 * @package   app-skeleton
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	...
$from = 'ceo@uqunie.com';
$to   = 'ceo@uqunie.com';
$subject = 'This is test mail.';
$content = '<p>This mail send at testcase.</p> ' . Time::Datetime();

//	...
$mail = new EMail();
$mail->From($from);
$mail->To($to);
$mail->Subject($subject);
$mail->Content($content,'text/html');
$mail->Send();
$mail->Debug();

//	...
//$io = mail($to, $subject, $content, "From: uqunie@app1.uqunie.com", null);
//var_dump($io);
