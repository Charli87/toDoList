<?php

$mysqli = mysqli_connect("localhost","root","","tasks");
require_once "task_repository.php";
$tasks = getTasks();
$id = $_GET['id'];

if($delete = $mysqli->query("DELETE FROM tasks WHERE id = $id")){
	header("Location: index.php");
}

?>