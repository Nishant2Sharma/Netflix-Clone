<?php
require 'conn.php';
$email = $_POST['email'];
$pass =  'Netflix@123';

$sql = "INSERT INTO Users (email, password)
VALUES ('$email', '$pass')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: ". $sql. "<br>". $conn->error;
}

$sql = "INSERT INTO Login (username, password)
VALUES ('$email', '$pass')";

if ($conn->query($sql) === TRUE) {
    echo " ";
} else {
    echo "Error: ". $sql. "<br>". $conn->error;
}

header("Location: ../home_page/home_page.html");
?>