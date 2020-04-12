
document.getElementById("body").style.transition = "all 1s";
function bgChange(pic) {
    pic="url("+pic+")";
    document.getElementById("body").style.backgroundImage=pic;
}
