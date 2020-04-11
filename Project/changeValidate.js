
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
function emailV(){

if(document.myForm.email.value.match(mailformat)){

    if(document.myForm.email.classList.contains("is-invalid"))
    {
        document.myForm.email.classList.remove("is-invalid");
    }
    document.myForm.email.classList.add("is-valid");
}
else
{
    if(document.myForm.email.classList.contains("is-valid"))
    {
        document.myForm.email.classList.remove("is-valid");
    }
    document.myForm.email.classList.add("is-invalid");
}
}

function sifreV(){

    if(Number.isInteger(parseInt(Number(document.myForm.sifre.value)))==true&&document.myForm.sifre.value!=""){
    
        if(document.myForm.sifre.classList.contains("is-invalid"))
        {
            document.myForm.sifre.classList.remove("is-invalid");
        }
        document.myForm.sifre.classList.add("is-valid");
    }
    else
    {
        if(document.myForm.sifre.classList.contains("is-valid"))
        {
            document.myForm.sifre.classList.remove("is-valid");
        }
        document.myForm.sifre.classList.add("is-invalid");
    }
    }