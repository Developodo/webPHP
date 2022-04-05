function validate(){
    console.log("Validando...");
    let title=document.getElementById("title").value+'';
    let body=document.getElementById("body").value+'';

    if(title.trim()=='' || body.trim()==''){
        alert("Complete todos los campos");
        return false;
    }else{
        return true;
    }
}