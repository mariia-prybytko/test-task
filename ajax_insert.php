<?php

$mysqli = new mysqli('localhost', 'maria', 'maria', 'project');

// mysqli_set_charset($mysqli, "utf8");

$results = $mysqli->prepare("INSERT INTO task (date, header, body, status) VALUES (?, ?, ?, ?)");

$results->bind_param('ssss', $_POST['date'], $_POST['header'], $_POST['body'], $_POST['status'] );

$return = $results->execute();

echo $return;
