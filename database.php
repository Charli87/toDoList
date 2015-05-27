<?php
/* define("SQLHOST", "localhost");
define("SQLUSER", "b3016598");
define("SQLDB", "b3016598_db1");
define("SQLPASSWORD", "qtvkrpo8"); */



function query($sql) {
	$mysqli = mysqli_connect("localhost","root","","tasks");
/* 	$mysqli = new mysqli(SQLHOST, SQLUSER, SQLPASSWORD, SQLDB); */
	
	if ($mysqli->connect_errno){
	echo "failed to connect to Mysql: ".$mysqli->connect_error;
	exit();
	}
	$result = $mysqli->query($sql);
	if(!$result) {
		echo "Failed to run query: ".$mysqli->error;
		exit();
	}
	return $result;
}

?>
