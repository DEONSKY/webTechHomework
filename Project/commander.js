var p_pic=document.getElementById("body").style.backgroundImage;
document.getElementById("body").style.transition = "all 1s";
function toggleDisplay(id,button,pic) {
    pic="url("+pic+")";
    
    //document.getElementById(id).classList.transition="all 2s";
    if(document.getElementById(id).classList.contains("d-none")) {
        document.getElementById(id).classList.remove("d-none");
        document.getElementById("body").style.backgroundImage=pic;
        document.getElementById(button).innerHTML="Daha Az";
       
    } else {
        document.getElementById(id).classList.add("d-none");
        document.getElementById("body").style.backgroundImage=p_pic;
        document.getElementById(button).innerHTML="Daha Fazla";
    }
}
