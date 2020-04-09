var p_pic=document.getElementById("body").style.backgroundImage;
document.getElementById("body").style.transition = "all 1s";
function toggleDisplay(id,button,pic) {
    pic="url("+pic+")";
    
    //document.getElementById(id).classList.transition="all 2s";
    if(document.getElementsByClassName(id).classList.contains("d-none")) {
        document.getElementById(id).classList.remove("d-none");
        document.getElementById("body").style.backgroundImage=pic;
        document.getElementById(button).innerHTML="Daha Az";
       
    } else {
        document.getElementById(id).classList.add("d-none");
        document.getElementById("body").style.backgroundImage=p_pic;
        document.getElementById(button).innerHTML="Daha Fazla";
    }
}

function backgroundChange(id,p_pic)
{
var elements = document.getElementsByClassName('carousel_background');
for(var i = 0; i < element.length; i++)
{
    if(element[i].classList.contains("actived"))
    {
        document.getElementById("body").style.backgroundImage=p_pic;
    }
}
}