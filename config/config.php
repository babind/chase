<?php


//these two constants are used to create root-relative web addresses
// and absolute server paths throughout all the code


define("BASE_URL","http://localhost/Chaseuni/");
define("ROOT_PATH",$_SERVER["DOCUMENT_ROOT"]."/Chaseuni");
define("UPLOAD_PATH",ROOT_PATH.'/public/uploads');

define("DB_HOST","localhost");
define("DB_NAME","chaseuni");
define("DB_USER","root");
define("DB_PASS","a");
$flasherror="";
$flashSuccess="";
session_start();



?>