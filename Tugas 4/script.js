/* DARK MODE */
var icon = document.getElementById("icon");
icon.onclick = function(){
    document.body.classList.toggle("lightmode");
    if(document.body.classList.contains("lightmode")){
        icon.src = "img/lightmode.png";
    } else {
        icon.src = "img/darkmode.png";
    }
}