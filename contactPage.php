<?php include_once('head.php') ?>
<?php 
$msg="";
$name=$_POST['cf-name'];
$subject=$_POST['cf-subject'];
$tel=$_POST['cf-tel'];
$email=$_POST['cf-email'];
$school=$_POST['cf-school'];
$mesej=$_POST['cf-message'];

$from_add = $email;

$to_add ='info@espas.my'; //<-- put your yahoo/gmail email address here

$subject2 = $subject;
$mesej2 ="<html><body>";
$mesej2 .="<p>  Mesej dari ".$name ."</p> ";
$mesej2 .="<p>  Subject :  ".$subject ." </p> ";
$mesej2 .="<p>  Tel : ". $tel ."</p> ";
$mesej2 .="<p>  Sekolah : ". $school ."</p> ";
$mesej2 .="<p>  Email : ". $email ."</p> ";
$mesej2 .="<p>  mesej : <br> ".$mesej  ."</p> ";
$mesej2 .= "</body></html>";
	
	$headers = "From: $from_add \r\n";
	$headers .= "Reply-To: $from_add \r\n";
	$headers .= "Return-Path: $from_add\r\n";
	$headers .= "X-Mailer: PHP \r\n";
	$headers .= "Content-type: text/html; charset=utf-8 \r\n";
	
	
	if(mail($to_add,$subject2,$mesej2,$headers)) 
	{
		 echo $msg = "<h3>Borang anda berjaya dihantar. Anda boleh tutup halaman ini.</h3>";
	} 
	else 
	{
 	   echo $msg = "<h3>Borang anda gagal dihantar! Sila tutup halaman ini dan cuba lagi.</h3>";
	};

?>
<?php include('footer.php') ?>