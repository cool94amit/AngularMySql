<?php
header('Access-Control-Allow-Origin: *');
 $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
	//print_r($request);
	//exit();
    $name = $request->name;
    $email = $request->email;
    $pass = $request->password;


$servername = "localhost";
$username = "root";
$password = ""; //Your User Password
$dbname = "angularmysql"; //Your Database Name


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = 'INSERT INTO users (id,name, email, password)
VALUES (NULL,"'.$name.'", "'.$email.'" , "'.$pass.'")';

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
	echo $json_string = json_encode("New record created successfully", JSON_PRETTY_PRINT);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
