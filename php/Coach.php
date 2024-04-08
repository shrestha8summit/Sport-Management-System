<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "registration"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$coach_name = $_POST['coach_name'];
$coach_id = $_POST['coach_id'];
$team_id = $_POST['team_id'];
$coach_age = $_POST['coach_age'];

$sql = "INSERT INTO coach (coach_name, coach_id, team_id, age)
        VALUES ('$coach_name', '$coach_id', '$team_id', '$coach_age')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
