<?php


session_start();
$errmsg_arr = array();
$errflag = false;

include("../../config/config.php");




	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}



$address = clean($_POST['address']);

if($address == '') {
	$errmsg_arr[] = 'Address Missing!';
	$errflag = true;
}

	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../index.php");
		exit();
	}






header("location: ../index.php");



?>
