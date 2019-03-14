<?php

$mysqli = new mysqli('localhost', 'maria', 'maria', 'project');

$sql = "SELECT * FROM task";

$results = $mysqli->query($sql);

$taskList = array();
$i = 0;

while ($row = $results->fetch_assoc()) {
    $taskList[$i]['id'] = $row['id'];
    $taskList[$i]['date'] = $row['date'];
    $taskList[$i]['header'] = $row['header'];
    $taskList[$i]['body'] = $row['body'];
	$taskList[$i]['status'] = $row['status'];
    $i++;
}

echo json_encode($taskList);
