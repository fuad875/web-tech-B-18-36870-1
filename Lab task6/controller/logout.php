<?php

if(isset($_COOKIE['staff'])){
		setcookie("staff", "flag", time()-100, '/');
        header('location: ../index.php');
	}

elseif(isset($_COOKIE['admin'])){
		setcookie("admin", "flag", time()-100, '/');
        header('location: ../index.php');
	}

?>