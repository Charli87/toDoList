<?php
require_once 'database.php';

function getTasks() {

    $sql = "SELECT * ";
    $sql .= "FROM tasks ";
    $sql .= "ORDER BY priority desc;";

    $result = query($sql);
    $tasks = array();
    while ($row = $result->fetch_assoc()) {
        array_push($tasks, $row);
    }
    $result->close();
    return $tasks;
}

function getTasksById($id) {
    $sql = "select * from tasks where id={$id} limit 1;";
    $result = query($sql);

    $tasks = array();
    while ($row = $result->fetch_assoc()) {
        array_push($tasks, $row);
    }
    $result->close();
    return $tasks;
}
?>