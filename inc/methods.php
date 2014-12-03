<?php

function isUserloggedin()
{
	return isset($_SESSION['user_id'])==true && $_SESSION
['user_id']!=0;
}


?>