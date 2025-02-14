// first name validation 

var FirstInput = document.getElementById("fname");

FirstInput.onblur = function Fvalid() {
    var input = document.getElementById("fname");
    var f_name = document.getElementById("fname").value;
    var warn = document.getElementById("warn1")

    var p = document.getElementById("mt1");
    var t = document.getElementById("mp1");

    if (f_name == "") {
        input.style.border = "1px solid red";
        warn.style.display = "inline";


    }
    else {
        input.style.border = "1px solid grey";
        warn.style.display = "none";
    }

    FirstInput.onclick = function Favalid() {
        p.style.display = "inline";
        t.style.display = "inline";
        warn.style.display = "none";

    }

    FirstInput.onblur = function Faavalid() {
        p.style.display = "none";
        t.style.display = "none";

        if (f_name == "") {
            warn.style.display = "inline";

        }
    }
    FirstInput.onchange = function () {

        Fvalid();

    }
}


// second name validation

var SecondInput = document.getElementById("sname");

SecondInput.onblur = function svalid() {
    var input = document.getElementById("sname");
    var s_name = document.getElementById("sname").value;
    var warn = document.getElementById("warn2")

    var p = document.getElementById("mt2");
    var t = document.getElementById("mp2");

    if (s_name == "") {
        input.style.border = "1px solid red";
        warn.style.display = "inline";


    }
    else {
        input.style.border = "1px solid grey";
        warn.style.display = "none";
    }

    SecondInput.onclick = function Savalid() {
        p.style.display = "inline";
        t.style.display = "inline";
        warn.style.display = "none";

    }

    SecondInput.onblur = function Saavalid() {
        p.style.display = "none";
        t.style.display = "none";

        if (s_name == "") {
            warn.style.display = "inline";

        }

    }

    SecondInput.onchange = function () {
        svalid();
    }

}


// mobile number or email
var thirdInput = document.getElementById("phone");
thirdInput.onblur = function () {

    var input = document.getElementById("phone");
    var input_value = document.getElementById("phone").value;
    var warn = document.getElementById("warn3");


    input_value.match("@" + ".com") || input_value.length >= 10 ? warn.style.display = "none" : warn.style.display = "inline";


    if (input_value == "") {
        input.style.border = "1px solid red";
        warn.style.display = "inline";
    }
    else {
        input.style.border = "1px solid grey";
    }


}

// password validdation here

var fourthInput = document.getElementById("pass");

fourthInput.onblur = function passvalid() {

    var input = document.getElementById("pass");
    var input_value = document.getElementById("pass").value;

    var warn = document.getElementById("warn4");
    var mp3 = document.getElementById("mp3");
    var mt3 = document.getElementById("mt3");

    mp3.style.display = "none";
    mt3.style.display = "none";

    var upper = /[A-Z]/g;
    var lower = /[a-z]/g;
    var number = /[0-9]/g;

    if (input_value.match(upper) && input_value.match(lower) && input_value.match(number) && input_value.length >= 6) {
        warn.style.display = "none";
        mp3.style.display = "none";
        mt3.style.display = "none";

    }
    else {
        warn.style.display = "inline";

    }

    fourthInput.onclick = function passvalidation() {
        if (input_value == "") {
            mp3.style.display = "inline";
            mt3.style.display = "inline";
        }
        else {
            mp3.style.display = "none";
            mt3.style.display = "none";
        }
    }

    fourthInput.onblur = function passvalidationer() {
        passvalid();
    }
}

// showpass
    var fifthcheckbox = document.getElementById("showpass")
    fifthcheckbox.onclick = function checkpass(){
        var input = document.getElementById("pass");
        var showbtn=document.getElementById("showpass") 
        var showtxt=document.getElementById("showtext") 

        if(showbtn.checked==true){
            input.type="text";
            showtxt.innerHTML="Hide Password";
        }
        else{
            input.type="password";
            showtxt.innerHTML="Show Password";

        }
    }



    var on_submit = document.getElementById("on-submit");
    on_submit.onsubmit = function form(){
        var f_name = document.getElementById("fname").value;
        var s_name = document.getElementById("sname").value;
        var mobilevalue = document.getElementById("phone").value;
        var inputpass = document.getElementById("pass").value;

        var first_name = document.getElementById("fname");
        var sir_name = document.getElementById("sname");
        var mobile = document.getElementById("phone");
        var passvalue = document.getElementById("pass");

        var warn1 = document.getElementById("warn1");
        var warn2 = document.getElementById("warn2");
        var warn3 = document.getElementById("warn3");
        var warn4 = document.getElementById("warn4");


       
        
        if(f_name==""){
            first_name.style.border = "1px solid red";
            warn1.style.display = "inline";

            
        }

    

        if(s_name==""){
            sir_name.style.border = "1px solid red";
            warn2.style.display = "inline";
        }
        
        if(mobilevalue==""){
            mobile.style.border = "1px solid red";
            warn3.style.display = "inline";

        }
        
        if(inputpass==""){
            passvalue.style.border = "1px solid red";
            warn4.style.display = "inline";
        }
        return false;
        
    }






