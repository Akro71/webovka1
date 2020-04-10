<?php
$servername = "localhost";
$dbname = "IdOf";


$conn = new mysqli($servername, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE DATABASE IF NOT EXIST IdOf";
$sql = "CREATE TABLE IF NOT EXIST M (email VARCHAR(50))"

$sql = "INSERT INTO M (email)
VALUES ('john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
