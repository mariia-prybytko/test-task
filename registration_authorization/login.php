<?php
include 'connection.php';

$email = $_POST["email"];
$pass = $_POST["password"];
$password = substr(md5($pass), 0, 10);

$sql = "SELECT `email`, `password` FROM `user` WHERE `email` = '$email' AND `password` = '$password'";
$res = mysqli_query($conn, $sql);
$result = mysqli_fetch_array($res);
if($result) { ?>
	
	<a href="http://test.mariia/tasks.html"><p style="font-family: MV Boli; text-align: center; margin-top: 15%; color: #4f495e; font-size: 40px; font-weight: bold;">You`ve logged in successfully!!!</p></a>
	
<?php
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>