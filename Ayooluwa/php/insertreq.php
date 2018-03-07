<?php

require 'connect.php';
$conn = Connect();
$fullname = $conn->real_escape_string($_POST['Fullname']);
$email = $conn->real_escape_string($_POST['Email']);
$phonenumber = $conn->real_escape_string($_POST['Phonenumber']);
$address = $conn->real_escape_string($_POST['Adress']);
$service = $conn->real_escape_string($_POST['Servic']);

$query = "INSERT into request (Fullname,Email,Phonenumber,Adress,Servic) VALUES ('" . $fullname . "','" . $email . "','" . $phonenumber . "',
'" . $address . "','" . $service . "')";
$success = $conn->query($query);

if (!$success){
    die("Couldn't enter data: ".$conn->error);
}

echo "Thank You For Contacting Me <br>";

$conn->close();

?>
