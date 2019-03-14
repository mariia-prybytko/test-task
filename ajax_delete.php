<?php

$mysqli = new mysqli('localhost', 'maria', 'maria', 'project');

$sql = "DELETE FROM task WHERE id = '" . $_POST['id'] . "'";

$return = $mysqli->query($sql);

echo $return;

