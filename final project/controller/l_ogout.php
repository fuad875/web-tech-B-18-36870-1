<?php

session_start();
	session_destroy();
    
    header('location:stufflogin.php');

?>