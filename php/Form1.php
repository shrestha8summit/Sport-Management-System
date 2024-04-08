<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link rel="shortcut icon" type="image/x-icon" href="logo1.png">
    <link rel="stylesheet" href="../CSS/style2.css">
</head>
<body>
    
    <div id="containner">

        <h1 id="top">Sports Management System</h1>
        <br>
       
        <div class="header">
            <div class="real_content" style="padding-left: 6rem;">                        
                <a href="#Team" style="padding-right: 1rem;">Team</a>
                <a href="#Player" style="padding-right: 1rem;">Player</a>
                <a href="#coach" style="padding-right: 1rem;">Coach</a>
                <a href="#matches" style="padding-right: 1rem;">Match</a>                    
            </div>
        </div>   

        <br>
        <img src="logo.png" alt="" style="width: 450px; height:400px; align-items: center; display: flex;margin-left: 32.5%;"> 

        <marquee behavior="slow" direction="left" style="margin-top:-20%; margin-left: 20%; margin-right: 20%; font-size: 25px;">
            Welcome to our web-page to fill the your respective details.
        </marquee>
        <br><br>
        <br><br>

        <div id="table-el">

        </div>
      
        <div id="Team" style="display: inline-grid">
            <br>
            <br>
            <br>
            <br>

            <form action="Team.php" method="post">
       
              <fieldset>
       
                  <legend style="padding: 10px; margin:10px;font-size: 25px;background: rebeccapurple;">
                      For team's only: 
                  </legend>
      
      
                  <label for="Team_id">Team Id:</label>
                  <input type="text" id="Team_id" name="Team_id" placeholder="1108" required>
      
                 
      
                  <label for="Team_name">Team Name:</label>
                  <input type="text" name="Team_name" id="Team_name" placeholder="The shadows" required>
      
                  <br>
                  <br>
      
                  <label for="Coach_name">Coach Name</label>
                  <input type="text" name="Coach_name" id="Coach_name" placeholder="Joseph Marino" required>
      
                  
                  <label for="Home_ground">Home Ground:</label>
                  <input type="text" name="Home_ground" id="Home_ground" placeholder="TU maidan" required>
                  
                  <br><br>
      
                  <button id="tsubmit-el">
                    Submit
                  </button>

              </fieldset>
      
            </form>
      
            <button class="top-el">TOP</button>

        </div>

        
        <div id="Player" style="display: inline-grid">
            <br><br>
            <br><br>
                <form action="Player.php" method="post">

                    <fieldset>
                    
                        <legend style="padding: 10px; margin:10px;font-size: 25px;background: rebeccapurple;">For participants only</legend>
                             
                        <label for="player_Id">Player ID:</label>
                        <input type="text" name="player_Id" id="player_Id" placeholder="COE888" required>
     
                        <label for="player_Name">Player Name</label>
                        <input type="text" name="player_Name" id="player_Name" placeholder="Anurgh" required>


                        <br>
                        <br>

                        <label for="player_Position">Position</label>
                        <input type="text" name="player_Position" id="player_Position" placeholder="Goalkeeper" required>

                        <label for="team_ID">Team ID</label>
                        <input type="text" name="team_ID" id="team_ID" placeholder="108" required>
                        <br>
    
                        <button id="psubmit-el">
                            Submit
                        </button>
                        
                      </fieldset>

                </form>

                <button class="top-el">TOP</button>
            
        </div>

        <div id="coach" style="display:inline-grid">
            <br><br><br><br>
           <form action="Coach.php" method="post">

            <fieldset>

                  <legend style="padding: 10px; margin:10px;font-size: 25px;background: rebeccapurple;">For Coach detail only.</legend>

                  <label for="coach_name">Coach Name:</label>
                  <input type="text" name="coach_name" id="coach_name" placeholder="James Pradhan" required>
      
                  <label for="coach_id" style="margin-left: 1rem;">Coach ID:</label>
                  <input type="text" name="coach_id" id="coach_id" placeholder="CCOE888" required>
      

                  <br>
                  <br>

                  <label for="team_id">Team ID:</label>
                  <input type="text" name="team_id" id="team_id" placeholder="1108" required>
      
                  <label for="coach_age">Age:</label>
                  <input type="number" name="coach_age" id="coach_age" placeholder="33" required>


                  <br>
                  <button id="csubmit-el">
                    Submit
                </button>

            </fieldset>

           </form>

           <button class="top-el">TOP</button>

        </div>

        <!-- <div id="matches" style="display:inline-block">
            <br><br><br><br>
            <form action="/php/matches.php" method="post">
            
                <fieldset>
                     
                    <legend style="padding: 10px; margin:10px;font-size: 25px;background: rebeccapurple;">For Match details</legend>

                    <label for="matchid">Match Id:</label>
                    <input type="text" name="matchid" id="matchid" placeholder="MCOE888" required>

                    <label for="ground">Ground:</label>
                    <input type="text" name="ground" id="ground" placeholder="TU Maidan" required>

                    <br>
                    <br>
                    <label for="dateofgame">Date:</label>
                    <input type="date" name="dateofgame" id="dateofgame" placeholder="2024-11-17" required>

                    <label for="home_teams">Home team:</label>
                    <input type="text" name="home_teams" id="home_teams" placeholder="The shadows" required>

                    <label for="away_team">Away team:</label>
                    <input type="text" name="away_team" id="away_team" placeholder="The light" required>
                    

                     <br>
                     <button id="msubmit-el">
                        Submit
                    </button>
                </fieldset>

            </form>

            <button class="top-el">TOP</button>

        </div> -->

        <button id="back-el">Option page</button>

        <div id="footer" style="margin-top:5%;">
            <br><br><br><br>
            <center> 

             <em style="font-family: 'Ballet', cursive;
             font-family: 'Eczar', serif;
             font-family: 'Edu VIC WA NT Beginner', cursive;
             font-family: 'Tektur', cursive;">Copyright 2024 A.D [2081 B.S] .<br> Purely self designed & developed. </em>
             <br>
             <em><a href="https://summit-shrestha.com.np/">More info here:</a> </em>

             <div class="social">
                 <a href="https://www.discordapp.com/users/838408850159173654" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/3670/3670325.png" alt="Discord" style="height: 1.75rem; padding-left:0.5rem;"></a>
                 <a href="https://www.facebook.com/shrestha8summit" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/5968/5968764.png" alt="Facebook" style="height: 1.75rem; padding-left:0.5rem;"></a>
                 <a href="https://www.github.com/shrestha8summit" target="_blank"><img src="	https://cdn-icons-png.flaticon.com/512/25/25657.png" alt="Github" style="height: 1.75rem; padding-left:0.5rem;"></a>
                 <a href="https://www.instagram.com/shrestha8summit" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/174/174855.png" alt="Instagram" style="height: 1.75rem; padding-left:0.5rem;"></a>
                 <a href="https://www.linkedin.com/in/summit8shrestha/" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/3536/3536505.png" alt="Linked In" style="height: 1.75rem; padding-left:0.5rem;"></a>
                 <a href="https://www.twitter.com/shrestha8summit" target="_blank"><img src="https://cdn-icons-png.flaticon.com/128/5968/5968958.png" alt="Twitter(X)" style="height: 1.75rem; padding-left:0.5rem;"></a>
                 <a href="https://www.youtube.com/@shrestha8summit" target="_blank"><img src="https://cdn-icons-png.flaticon.com/128/1384/1384060.png" alt="Youtube" style="height: 1.9rem; padding-left:0.5rem;"></a>
             </div>

            </center>

        </div>

    </div>

<script src="../JS/form1.js"></script>
</body>
</html>
