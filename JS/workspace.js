let teamsEl  = document.getElementById("teams-el");
let playerEL = document.getElementById("players-el");
let coachesEl= document.getElementById("coaches-el");
let matchEl  = document.getElementById("match-el");
let tableEl  = document.getElementById("table-el")
let logoutEl = document.getElementById("logout-el")

teamsEl.addEventListener("click",function()
{
  
  console.log("Button clicked");
  window.location.href="#card-header1";
})

playerEL.addEventListener("click",function()
{
    // tableEl.innerHTML = " lorem "
    console.log("Button clicked")
    window.location.href="#card-header2"
})

coachesEl.addEventListener("click",function()
{
    // tableEl.innerHTML = "hello world";
    console.log("Button clicked")
    window.location.href="#card-header3"
})


logoutEl.addEventListener("click",function()
{
  console.log("Logging out");
  window.location.href="index.php";
})