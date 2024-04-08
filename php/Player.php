<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "registration"; 

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$player_Id = $_POST['player_Id'];
$player_Name = $_POST['player_Name'];
$player_Position = $_POST['player_Position'];
$team_ID = $_POST['team_ID'];


$sql = "INSERT INTO Player (player_Id, player_Name, player_Position, team_ID)
        VALUES ('$player_Id', '$player_Name', '$player_Position', '$team_ID')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
