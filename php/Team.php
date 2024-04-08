<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "registration"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$Team_id = $_POST['Team_id'];
$Team_name = $_POST['Team_name'];
$Coach_name = $_POST['Coach_name'];
$Home_ground = $_POST['Home_ground'];


$sql = "INSERT INTO Team (Team_id, Team_name, Coach_name, Home_ground)
        VALUES ('$Team_id', '$Team_name', '$Coach_name', '$Home_ground')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
