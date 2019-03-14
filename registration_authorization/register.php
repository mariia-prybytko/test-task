<?php
include 'connection.php';
$f_name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"]; 

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    
	$sql = "INSERT INTO user (`name`, `email`, `password`) VALUES ('$name', '$email', MD5('$password'))";


	if (mysqli_query($conn, $sql)) {
    ?><a href="http://test.mariia/login.html"><p style="font-family: MV Boli; text-align: center; margin-top: 15%; color: #4f495e; font-size: 40px; font-weight: bold;">You`ve registered successfully!!!</p></a>
	
	<?php
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
} else {
    echo "Email $email is not correct!\n";
}



mysqli_close($conn);
?>