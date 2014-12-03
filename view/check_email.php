<?php
 include_once'model.php';

$user=new Chaseuni();
$email=$_REQUEST['email'];
$isUnique=$user->doesEmailExists($email);
$isvalid=!$isUnique;
 echo json_encode(array('valid'=>$isvalid));

?>