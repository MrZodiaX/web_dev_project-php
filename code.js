function checkfield_first(){
    var field = document.getElementById("first_name").value;
    var regex= /^[A-Za-z]{2,15}$/;
    /* accepted 2-15 characters */

    if(regex.test(field)){
        document.getElementById("message").style.color = "green";
        document.getElementById("message").innerHTML = "accepted";
        return true;
    }
    else{
        document.getElementById("message").style.color = "red";
        document.getElementById("message").innerHTML = "not valid";
        return false;
    }
}

function checkfield_last(){
    var field = document.getElementById("last_name").value;
    var regex= /^[A-Za-z]{2,15}$/;
    /* accepted 2-25 characters */

    if(regex.test(field)){
        document.getElementById("message2").style.color = "green";
        document.getElementById("message2").innerHTML = "accepted";
        return true;
    }
    else{
        document.getElementById("message2").style.color = "red";
        document.getElementById("message2").innerHTML = "not valid";
        return false;
    }
}


function check_add(){
    var len = document.getElementById("add").value;
    var kk = len.length;
    if(kk >= 5 && kk<=30){
        document.getElementById("message3").style.color = "green";
        document.getElementById("message3").innerHTML = "accepted";
        return true;
    }
    else{
        document.getElementById("message3").style.color = "red";
        document.getElementById("message3").innerHTML = "not valid";
        return false;
    }
    return true;
}

function check_contact(){
    var fd = document.getElementById("ph_no").value;
    var yoyo= /^\d{3}-\d{3}-\d{4}$/;
    /* accepted 2-25 characters */

    if(yoyo.test(fd)){
        document.getElementById("phone").style.color = "green";
        document.getElementById("phone").innerHTML = "accepted";
        return true;
    }
    else{
        document.getElementById("phone").style.color = "red";
        document.getElementById("phone").innerHTML = "not valid";
        return false;
    }
}

function check_pass(){
    var one = document.getElementById("pass1").value;
    var two = document.getElementById("pass2").value;
    if(one == two){
        document.getElementById("password").style.color = "green";
        document.getElementById("password").innerHTML = "accepted";
        return true;
    }
    else{
        document.getElementById("password").style.color = "red";
        document.getElementById("password").innerHTML = "passwords not same";
        return false;
    }
}

function submitted(){
    window.location = 'thankyou.html';
}