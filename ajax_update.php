<?php

$mysqli = new mysqli('localhost', 'maria', 'maria', 'project');

// mysqli_set_charset($mysqli, "utf8");

$sql = "UPDATE student SET " . $_POST['col'] . 
	   " = '" . $_POST['value'] . 
	   "' WHERE id = '" . $_POST['id']. "'";

$return = $mysqli->query($sql);

echo $return;


