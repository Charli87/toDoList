<?php

require_once 'database.php';

if (isset($_GET["id"])) {
    $tasks = $_GET["id"];
}
  if (isset($_GET["completed"])) {
    $completed = $_GET['completed'];
 }
 
 if (empty($completed)){
   $sql = "UPDATE tasks SET completed=1 where id= ${tasks} limit 1;";
   $result = query($sql);
   header("Location: index.php"); 
 } else {
    $sql = "UPDATE tasks SET completed=0 where id= ${tasks} limit 1;";
    $result = query($sql);
    header("Location: index.php");
 }
 ?>