let DBAEl = document.getElementById("DBA-el");
let RegestrationEl = document.getElementById("Regestration-el");
let ManagerEl = document.getElementById("Managers-el");

DBAEl.addEventListener("click",function()
{
    window.location.href="dba.php";
})

RegestrationEl.addEventListener("click",function()
{
    window.location.href ="Form1.php";
})

ManagerEl.addEventListener("click",function()
{
    window.location.href="manager.php";
})

// let backEl = document.GetElementById("back-el");
// backEl.addEventlistner("dblclick",function()
// {
// window.location.href="index.php"
// })