let tableEL = document.getElementById("table-el");
let teamEl = document.getElementById("team-el");
let playerEl = document.getElementById("player-el");
let coachEL = document.getElementById("coach-el");
let matchEL = document.getElementById("match-el");
let backyEl = document.getElementById("backy-el");

function loadContent(htmlContent) {
    document.getElementById('table-el').innerHTML = htmlContent;
}

teamEl.addEventListener("click",function()
{
    console.log("clicked");
    window.location.href="#emptyspace";
    var teamsHTML = `
    <br><br><br><br>
    <form action="php/Team.php" method="POST">
       
    <fieldset style="dispplay:inline-float; padding-buttom:10%;">

        <legend style="padding: 10px; margin:10px;font-size: 25px;background: rebeccapurple;">
            For team's only: 
        </legend>


        <label for="Team_id">Team Id:</label>
        <input type="text" id="Team_id" name"Team_id" placeholder="1108" required">

       

        <label for="Team_name">Team Name:</label>
        <input type="text" name="Team_name" id="Team_name" placeholder="The shadows" required pattern="[A-Za-z\s]+">

        <br>
        <br>

        <label for="Coach_name">Coach Name</label>
        <input type="text" name="Coach_name" id="Coach_name" placeholder="Joseph Marino" required pattern="[A-Za-z\s]+">

        
        <label for="Home_ground">Home Ground:</label>
        <input type="text" name="Home_ground" id="Home_ground" placeholder="TU maidan" required pattern="[A-Za-z\s]+">
        
        <br>

        <button id="tsubmit-el">
          Submit
        </button>

    </fieldset>

  </form>

    `;
    loadContent(teamsHTML);
})


playerEl.addEventListener("click",function()
{
    console.log("playerEl working");
    window.location.href="#emptyspace";
    var playersHTML =
    `
    <br><br>
            <br><br>
                <form action="/php/Player.php" method="POST">

                    <fieldset>
                    
                        <legend style="padding: 10px; margin:10px;font-size: 25px;background: rebeccapurple;">For participants only</legend>
                             
                        <label for="player_Id">Player ID:</label>
                        <input type="text" name="player_Id" id="player_Id" placeholder="COE888" required>
     
                        <label for="player_Name">Player Name</label>
                        <input type="text" name="player_Name" id="player_Name" placeholder="Anurgh" required pattern="[A-Za-z\s]+">


                        <br>
                        <br>

                        <label for="player_Position">Position</label>
                        <input type="text" name="player_Position" id="player_Position" placeholder="Goalkeeper" required pattern="[A-Za-z\s]+">

                        <label for="team_ID">Team ID</label>
                        <input type="text" name="team_ID" id="team_ID" placeholder="108" required>
                        <br>
    
                        <button id="psubmit-el">
                            Submit
                        </button>
                        
                      </fieldset>

                </form>
            
    

    `;
    loadContent(playersHTML);

})


coachEL.addEventListener("click",function()
{
    console.log("coachEl working");
    window.location.href="#emptyspace";
    var coachHTML =
    `
    <br><br><br><br>
           <form action="/php/coach.php" method="POST">

            <fieldset>

                  <legend style="padding: 10px; margin:10px;font-size: 25px;background: rebeccapurple;">For Coach detail only.</legend>

                  <label for="coach_name">Coach Name:</label>
                  <input type="text" name="coach_name" id="coach_name" placeholder="James Pradhan" required pattern="[A-Za-z\s]+">
      
                  <label for="coach_id" style="margin-left: 1rem;">Coach ID:</label>
                  <input type="text" name="coach_id" id="coach_id" placeholder="CCOE888" required>
      

                  <br>
                  <br>

                  <label for="team_id">Team ID:</label>
                  <input type="text" name="team_id" id="team_id" placeholder="1108" required>
      
                  <label for="coach_age">Age:</label>
                  <input type="number" name="coach_age" id="coach_age" placeholder="33" required pattern="[A-Za-z\s]+">


                  <br>
                  <button id="csubmit-el">
                    Submit
                </button>

            </fieldset>
    
    
    `;
    loadContent(coachHTML);

})

matchEL.addEventListener("click",function()
{
    console.log("match working");
    window.location.href="#emptyspace";
    var matchHTML =
    `
    <br><br><br><br>
    <form action="/php/matches.php" method="POST">
    
        <fieldset>
             
            <legend style="padding: 10px; margin:10px;font-size: 25px;background: rebeccapurple;">For Match details</legend>

            <label for="matchid">Match Id:</label>
            <input type="text" name="matchid" id="matchid" placeholder="MCOE888" required>

            <label for="ground">Ground:</label>
            <input type="text" name="ground" id="ground" placeholder="TU Maidan" required pattern="[A-Za-z\s]+">

            <br>
            <br>
            <label for="dateofgame">Date:</label>
            <input type="date" name="dateofgame" id="dateofgame" placeholder="2024-11-17" required>

            <label for="home_teams">Home team:</label>
            <input type="text" name="home_teams" id="home_teams" placeholder="The shadows" required pattern="[A-Za-z\s]+">

            <label for="away_team">Away team:</label>
            <input type="text" name="away_team" id="away_team" placeholder="The light" required pattern="[A-Za-z\s]+">
            

             <br>
             <button id="msubmit-el">
                Submit
            </button>
        </fieldset>

    </form>
    
    
    `;
    loadContent(matchHTML);

})

backyEl.addEventListener("click",function()
{
    window.location.href = "/HTML/intro.html";
})


alert("Use the capital name for differentating  name and sir-name but request not to place spqce in between them.");