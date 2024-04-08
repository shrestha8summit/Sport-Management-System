let topEL = document.getElementsByClassName("top-el");
let backEL = document.getElementById("back-el");


for (let i = 0; i < topEL.length; i++) {
    topEL[i].addEventListener("click", function() {
        window.location.href = "#top";
    });
}


backEL.addEventListener("click", function() {
    window.location.href = "index.php";
});
