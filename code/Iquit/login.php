<?php 

$servername = "localhost"; //server
$username = "root"; //username
$password = "root"; //password
$dbname = "Siqi"; //database name

// create connection
$conn = new mysqli("localhost", "root", "root", "Siqi");
// check connection
if ($conn->connect_error) {
    die("connection lose: " . $conn->connect_error);
} 

// impo
include'validation.php';

$email = ""

//check email
if (!isValidEmail($email,$msg)){
	//Error!
	echo "error in email!";
	exit();
}

//check password

//check fullname

//check data(birthday)



echo "Successful database connection!";


$sql = "INSERT INTO members (username, password) VALUES ('siqi', 'Lisiqi77')";

if ($conn->query($sql) === TRUE) {
    echo "The new record was inserted successfully";
} else {
    echo "Error: " . $sql . "
" . $conn->error;
}


?>
