const captcha = document.getElementById("captcha");
document.getElementsByName("captcha")[0].addEventListener('change', captchaValid);

function captchaValid(){
    if ( captcha.classList.value == "apply-shake" )  captcha.classList.remove("apply-shake");
    if( this.value != ""){
        captcha.style.borderColor = "#a5cda5";
    }else{
        captcha.style.borderColor = "red";
        captcha.classList.add("apply-shake");
    }
}

function validation(){  
    
    var error = false;

    if( captcha.value == "" ){
        captcha.placeholder = "Pole nie może być puste";
        captcha.style.borderColor = "red";
        captcha.classList.toggle("apply-shake");
        error = true;
    }else{
        captcha.style.borderColor = "#a5cda5"; 
    }

    return !error;    
}
