<?php

$servername = "localhost";
$username = "root";
$password = ""; 
$database = "registration";


$conn = mysqli_connect($servername, $username, $password, $database);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['edit_player_btn'])) {
    
    $player_id = $_POST['edit_player_id'];
    $updated_name = $_POST['updated_player_name'];
    $updated_position = $_POST['updated_player_position'];

   
    $update_query = "UPDATE player SET player_Name = '$updated_name', player_Position = '$updated_position' WHERE player_Id = '$player_id'";

   
    if(mysqli_query($conn, $update_query)) {
        echo "<script>alert('Player record updated successfully');</script>";
    } else {
        echo "<script>alert('Error updating player record: " . mysqli_error($conn) . "');</script>";
    }
}


if(isset($_POST['delete_player_btn'])) {
   
    $player_id = $_POST['delete_player_id'];

    
    $delete_query = "DELETE FROM player WHERE player_Id = '$player_id'";

   
    if(mysqli_query($conn, $delete_query)) {
        echo "<script>alert('Player record deleted successfully');</script>";
    } else {
        echo "<script>alert('Error deleting player record: " . mysqli_error($conn) . "');</script>";
    }
}


if(isset($_POST['edit_team_btn'])) {
  
    $team_id = $_POST['edit_team_id'];
    $updated_name = $_POST['updated_team_name'];
    $updated_coach = $_POST['updated_coach_name'];
    $updated_ground = $_POST['updated_home_ground'];

   
    $update_query = "UPDATE team SET Team_name = '$updated_name', Coach_name = '$updated_coach', Home_ground = '$updated_ground' WHERE Team_id = '$team_id'";

   
    if(mysqli_query($conn, $update_query)) {
        echo "<script>alert('Team record updated successfully');</script>";
    } else {
        echo "<script>alert('Error updating team record: " . mysqli_error($conn) . "');</script>";
    }
}

if(isset($_POST['delete_team_btn'])) {
   
    $team_id = $_POST['delete_team_id'];

   
    $delete_query = "DELETE FROM team WHERE Team_id = '$team_id'";

   
    if(mysqli_query($conn, $delete_query)) {
        echo "<script>alert('Team record deleted successfully');</script>";
    } else {
        echo "<script>alert('Error deleting team record: " . mysqli_error($conn) . "');</script>";
    }
}


if(isset($_POST['edit_coach_btn'])) {
    
    $coach_id = $_POST['edit_coach_id'];
    $updated_name = $_POST['updated_coach_name'];
    $updated_age = $_POST['updated_coach_age'];

    
    $update_query = "UPDATE coach SET coach_name = '$updated_name', age = '$updated_age' WHERE coach_id = '$coach_id'";

    
    if(mysqli_query($conn, $update_query)) {
        echo "<script>alert('Coach record updated successfully');</script>";
    } else {
        echo "<script>alert('Error updating coach record: " . mysqli_error($conn) . "');</script>";
    }
}


if(isset($_POST['delete_coach_btn'])) {
    
    $coach_id = $_POST['delete_coach_id'];
    $delete_query = "DELETE FROM coach WHERE coach_id = '$coach_id'";

    if(mysqli_query($conn, $delete_query)) {
        echo "<script>alert('Coach record deleted successfully');</script>";
    } else {
        echo "<script>alert('Error deleting coach record: " . mysqli_error($conn) . "');</script>";
    }
}


$team_query  = "SELECT * FROM team";
$team_result = mysqli_query($conn, $team_query);

$player_query  = "SELECT * FROM player";
$player_result = mysqli_query($conn, $player_query);

$coach_query  = "SELECT * FROM coach";
$coach_result = mysqli_query($conn, $coach_query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="..\Pics\logo1.png">
    <link rel="stylesheet" href="..\CSS\workspace.css">
    <title>Working Space for DBA</title>
</head>
<body>
    

    <div id="container" style="display: inline-block;">

    <h2>Perform your all edit and delete operation in this webpage.</h2>

        <div id="btn">
            <fieldset>
                <button style="margin-right:1rem;" id="teams-el">Teams</button>
                <button style="margin-right:1rem;" id="players-el">Players</button>
                <button style="margin-right:1rem;" id="coaches-el">Coaches</button>
                <!-- <button style="margin-right:1rem;" id="match-el">Match Schedule</button> -->
            </fieldset>
        </div>

        <fieldset id="table-el" style="margin-top: 5%;">

            <div id="contain_team">
                <div id="card">
                    <div id="card-header1">
                        <h2 class="display-6">Team records</h2>
                     </div>
                    <div class="card-body">
                        <table class="table" style="text-align: center; border: 2px solid azure;">
                            <tr style="background: rgb(82, 11, 11); border:2px solid azure;">
                                <td style="padding: 0.7rem 3rem;">Team ID</td>
                                <td style="padding: 0.7rem 3rem;">Team Name</td>
                                <td style="padding: 0.7rem 3rem;">Coach Name</td>
                                <td style="padding: 0.7rem 3rem;">Home Ground</td>
                                <td style="padding: 0.7rem 3rem;">Edit</td>
                                <td style="padding: 0.7rem 3rem;">Delete</td>
                            </tr>
                            <?php
                            while($team_row = mysqli_fetch_assoc($team_result))
                            {
                            ?>
                            <tr>
                                <td style="border:2px solid azure;"><?php echo $team_row['Team_id']; ?></td>
                                <td style="border:2px solid azure;"><?php echo $team_row['Team_name']; ?></td>
                                <td style="border:2px solid azure;"><?php echo $team_row['Coach_name']; ?></td>
                                <td style="border:2px solid azure;"><?php echo $team_row['Home_ground']; ?></td>
                                <td style="border:2px solid azure;">
                                
                                    <form method="post">
                                        <input type="hidden" name="edit_team_id" value="<?php echo $team_row['Team_id']; ?>">
                                        <input type="text" name="updated_team_name" placeholder="Updated team name">
                                        <input type="text" name="updated_coach_name" placeholder="Updated coach name">
                                        <input type="text" name="updated_home_ground" placeholder="Updated home ground">
                                        <button type="submit" name="edit_team_btn" class="btn">Save</button>
                                    </form>
                                </td>
                                <td style="border:2px solid azure;">
                                    <form method="post">
                                        <input type="hidden" name="delete_team_id" value="<?php echo $team_row['Team_id']; ?>">
                                        <button type="submit" name="delete_team_btn" class="btn">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <?php    
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
            
        </fieldset>
        
        <fieldset id="table-el" style="margin-top: 5%;">

            <div id="contain_player">
                <div id="card">
                    <div id="card-header2">
                        <h2 class="display-6">Player's records</h2>
                    </div>
                    <div class="card-body">
                        <table class="table" style="text-align: center; border: 2px solid azure;">
                            <tr style="background: rgb(82, 11, 11); border:2px solid azure;">
                                <td style="padding: 0.7rem 3rem;">Player ID</td>
                                <td style="padding: 0.7rem 3rem;">Player Name</td>
                                <td style="padding: 0.7rem 3rem;">Player Position</td>
                                <td style="padding: 0.7rem 3rem;">Team ID</td>
                                <td style="padding: 0.7rem 3rem;">Edit</td>
                                <td style="padding: 0.7rem 3rem;">Delete</td>
                            </tr>
                            <?php
                            while($player_row = mysqli_fetch_assoc($player_result))
                            {
                            ?>
                            <tr>
                                <td style="border:2px solid azure;"><?php echo $player_row['player_Id']; ?></td>
                                <td style="border:2px solid azure;"><?php echo $player_row['player_Name']; ?></td>
                                <td style="border:2px solid azure;"><?php echo $player_row['player_Position']; ?></td>
                                <td style="border:2px solid azure;"><?php echo $player_row['team_Id']; ?></td>
                                <td style="border:2px solid azure;">
                                    <form method="post">
                                        <input type="hidden" name="edit_player_id" value="<?php echo $player_row['player_Id']; ?>">
                                        <input type="text" name="updated_player_name" placeholder="Updated name">
                                        <input type="text" name="updated_player_position" placeholder="Updated position">
                                        <button type="submit" name="edit_player_btn" class="btn">Save</button>
                                    </form>
                                </td>
                                <td style="border:2px solid azure;">
                                    <form method="post">
                                        <input type="hidden" name="delete_player_id" value="<?php echo $player_row['player_Id']; ?>">
                                        <button type="submit" name="delete_player_btn" class="btn">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <?php    
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
            
        </fieldset>

        <fieldset id="table-el" style="margin-top: 5%;">

            <div id="contain_coach">
                <div id="card">
                    <div id="card-header3">
                        <h2 class="display-6">Coach records</h2>
                    </div>
                    <div class="card-body">
                        <table class="table" style="text-align: center; border: 2px solid azure;">
                            <tr style="background: rgb(82, 11, 11); border:2px solid azure;">
                                <td style="padding: 0.7rem 3rem;">Coach ID</td>
                                <td style="padding: 0.7rem 3rem;">Coach Name</td>
                                <td style="padding: 0.7rem 3rem;">Age</td>
                                <td style="padding: 0.7rem 3rem;">Team ID</td>
                                <td style="padding: 0.7rem 3rem;">Edit</td>
                                <td style="padding: 0.7rem 3rem;">Delete</td>
                            </tr>
                            <?php
                            while($coach_row = mysqli_fetch_assoc($coach_result))
                            {
                            ?>
                            <tr>
                                <td style="border:2px solid azure;"><?php echo $coach_row['coach_id']; ?></td>
                                <td style="border:2px solid azure;"><?php echo $coach_row['coach_name']; ?></td>
                                <td style="border:2px solid azure;"><?php echo $coach_row['age']; ?></td>
                                <td style="border:2px solid azure;"><?php echo $coach_row['team_id']; ?></td>
                                <td style="border:2px solid azure;">
                                 
                                    <form method="post">
                                        <input type="hidden" name="edit_coach_id" value="<?php echo $coach_row['coach_id']; ?>">
                                        <input type="text" name="updated_coach_name" placeholder="Updated coach name">
                                        <input type="text" name="updated_coach_age" placeholder="Updated age">
                                        <button type="submit" name="edit_coach_btn" class="btn">Save</button>
                                    </form>
                                </td>
                                <td style="border:2px solid azure;">
                                    
                                    <form method="post">
                                        <input type="hidden" name="delete_coach_id" value="<?php echo $coach_row['coach_id']; ?>">
                                        <button type="submit" name="delete_coach_btn" class="btn">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <?php    
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
            
        </fieldset>

    </div>
    <button id="logout-el">Log out</button>
<script src="../JS/workspace.js"></script>
</body>
</html>
