<?php
// $to="babin.dahal3@gmail.com";
// $subject="My subject";
// $txt="hello mister!";
// //$headers="From:babin.dahal3@hotmail.com."."\r/n"."CC:babin.dahal3@gmail.com";
// $sendmail= mail($to,$subject,$txt);//$headers);
// echo $sendmail ;


//echo "hello";
 
 $id=$_GET['id'];

 include_once'model.php';

$sendMail=new Chaseuni();

if($_POST['email']==0
	$right=$sendMail->update($email)
?>