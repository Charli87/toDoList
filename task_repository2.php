<?php

require_once 'database.php';
$mysqli = mysqli_connect("localhost","root","","tasks");

if (isset($_POST['addTask'])) { //This is what happens when you click on register
    $priority = $_POST['priority']; //these are the columns in the database
    $description = $_POST['description'];	

    //getting the values from what you type in in the insert venue page
    $sql = "INSERT INTO tasks
       (description,priority) values ('$description', '$priority');";
$insert_task = $mysqli->query($sql);
}
?>