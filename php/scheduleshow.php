<?php

$servername = "localhost";
$username = "root";
$password = ""; 
$database = "registration";


$conn = mysqli_connect($servername, $username, $password, $database);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// if(isset($_POST['edit_player_btn'])) {
    
//     $player_id = $_POST['edit_player_id'];
//     $updated_name = $_POST['updated_player_name'];
//     $updated_position = $_POST['updated_player_position'];

   
//     $update_query = "UPDATE player SET player_Name = '$updated_name', player_Position = '$updated_position' WHERE player_Id = '$player_id'";

   
//     if(mysqli_query($conn, $update_query)) {
//         echo "<script>alert('Player record updated successfully');</script>";
//     } else {
//         echo "<script>alert('Error updating player record: " . mysqli_error($conn) . "');</script>";
//     }
// }


// if(isset($_POST['delete_player_btn'])) {
   
//     $player_id = $_POST['delete_player_id'];

    
//     $delete_query = "DELETE FROM player WHERE player_Id = '$player_id'";

   
//     if(mysqli_query($conn, $delete_query)) {
//         echo "<script>alert('Player record deleted successfully');</script>";
//     } else {
//         echo "<script>alert('Error deleting player record: " . mysqli_error($conn) . "');</script>";
//     }
// }


// if(isset($_POST['edit_team_btn'])) {
  
//     $team_id = $_POST['edit_team_id'];
//     $updated_name = $_POST['updated_team_name'];
//     $updated_coach = $_POST['updated_coach_name'];
//     $updated_ground = $_POST['updated_home_ground'];

   
//     $update_query = "UPDATE team SET Team_name = '$updated_name', Coach_name = '$updated_coach', Home_ground = '$updated_ground' WHERE Team_id = '$team_id'";

   
//     if(mysqli_query($conn, $update_query)) {
//         echo "<script>alert('Team record updated successfully');</script>";
//     } else {
//         echo "<script>alert('Error updating team record: " . mysqli_error($conn) . "');</script>";
//     }
// }

// if(isset($_POST['delete_team_btn'])) {
   
//     $team_id = $_POST['delete_team_id'];

   
//     $delete_query = "DELETE FROM team WHERE Team_id = '$team_id'";

   
//     if(mysqli_query($conn, $delete_query)) {
//         echo "<script>alert('Team record deleted successfully');</script>";
//     } else {
//         echo "<script>alert('Error deleting team record: " . mysqli_error($conn) . "');</script>";
//     }
// }


// if(isset($_POST['edit_coach_btn'])) {
    
//     $coach_id = $_POST['edit_coach_id'];
//     $updated_name = $_POST['updated_coach_name'];
//     $updated_age = $_POST['updated_coach_age'];

    
//     $update_query = "UPDATE coach SET coach_name = '$updated_name', age = '$updated_age' WHERE coach_id = '$coach_id'";

    
//     if(mysqli_query($conn, $update_query)) {
//         echo "<script>alert('Coach record updated successfully');</script>";
//     } else {
//         echo "<script>alert('Error updating coach record: " . mysqli_error($conn) . "');</script>";
//     }
// }


// if(isset($_POST['delete_coach_btn'])) {
    
//     $coach_id = $_POST['delete_coach_id'];
//     $delete_query = "DELETE FROM coach WHERE coach_id = '$coach_id'";

//     if(mysqli_query($conn, $delete_query)) {
//         echo "<script>alert('Coach record deleted successfully');</script>";
//     } else {
//         echo "<script>alert('Error deleting coach record: " . mysqli_error($conn) . "');</script>";
//     }
// }


$match_query  = "SELECT * FROM  `match`";
$match_result = mysqli_query($conn, $match_query);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="logo1.png">
    <link rel="stylesheet" href="..\CSS\workspace.css">
    <title>Your Schedule</title>
</head>
<body>
    

    <div id="container" style="display: inline-block;">

    <h2>Hope to see your Schedule poperly and reach to the match at or before 8:45 am.</h2>

      <fieldset id="table-el" style="margin-top: 5%;">

            <div id="contain_team">
                <div id="card">
                    <div id="card-header1">
                        <h2 class="display-6">Team records</h2>
                     </div>
                    <div class="card-body">
                        <table class="table" style="text-align: center; border: 2px solid azure;">
                            <tr style="background: rgb(82, 11, 11); border:2px solid azure;">
                                <td style="padding: 0.7rem 3rem;">Match ID</td>
                                <td style="padding: 0.7rem 3rem;">Ground</td>
                                <td style="padding: 0.7rem 3rem;">Date Of Game</td>
                                <td style="padding: 0.7rem 3rem;">Home Team</td>
                                <td style="padding: 0.7rem 3rem;">Away Team</td>
                            </tr>
                            <?php
                            while($match_row = mysqli_fetch_assoc($match_result))
                            {
                            ?>
                            <tr>
                                <td style="border:2px solid azure;"><?php echo $match_row['match_id']; ?></td>
                                <td style="border:2px solid azure;"><?php echo $match_row['ground']; ?></td>
                                <td style="border:2px solid azure;"><?php echo $match_row['dateofgame']; ?></td>
                                <td style="border:2px solid azure;"><?php echo $match_row['home_team']; ?></td>
                                <td style="border:2px solid azure;"><?php echo $match_row['away_team'];?></td>
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
    <button id="logout-el">Option page</button>
<script>
    let logoutEl = document.getElementById("logout-el");
    logoutEl.addEventListener("click",function()
    {
    window.location.href="index.php";
    })
</script>
</body>
</html>
