<?php

$flashsuccess=$flashError="";
include_once'../model/user.php';

$userobj=new Chaseuni();

$user=$userobj->getValueById($_GET['id']);
//var_dump($user);
if($user['verification_code']==$_GET['verification_code']){
	$flashSuccess="Your email has been successfully verified.";
	$userobj->verifyEmail($_GET['id']);
}else{
	$flassError="Invalid Verification code ";
}	


?>
	