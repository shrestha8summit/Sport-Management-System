<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "registration"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $matchid = mysqli_real_escape_string($conn, $_POST['matchid']);
    $ground = mysqli_real_escape_string($conn, $_POST['ground']);
    $dateofgame = mysqli_real_escape_string($conn, $_POST['dateofgame']);
    $home_team = mysqli_real_escape_string($conn, $_POST['home_teams']);
    $away_team = mysqli_real_escape_string($conn, $_POST['away_team']);
    
    // Attempt insert query execution
    $sql = "INSERT INTO `match` (match_id, ground, dateofgame, home_team, away_team) VALUES ('$matchid', '$ground', '$dateofgame', '$home_team', '$away_team')";
    if(mysqli_query($conn, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}

// Close connection
$conn->close();
?>

