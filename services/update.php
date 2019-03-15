<?php

$mysqli = new mysqli('localhost', 'maria', 'maria', 'project');

$sql = "UPDATE task SET " . $_POST['col'] . 
	   " = '" . $_POST['value'] . 
	   "' WHERE id = '" . $_POST['id']. "'";

$return = $mysqli->query($sql);

echo $return;


