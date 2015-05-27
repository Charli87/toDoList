<?php
function query($sql) {
	$mysqli = mysqli_connect("localhost","root","","tasks");
	
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
