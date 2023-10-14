<?php
include "db_conn.php";

if (isset($_POST['uname'])) {
	function validate($data) {
		return $data;
	}
	$uname = validate($_POST['uname']);
	// $pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error = User Name is required!");
		exit();
	} else {
		eval("\$y = \"$uname\";");
		echo $uname;
	}

} else {
	header("Location: index.php");
	exit();
}