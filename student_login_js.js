//var t = document.getElementsByClassName("captcha");
//var arr = ['a','a','a','a','a','a','a','a','a','a','a','a','a','a','a','a','a','a','a','a','a','a','a','a','a','a','a','a','a','a','a','a','a','a','a','a','a','','s','a','p','o','i','u','y','t','r','e','w','q','1','2','3','4','5','6','7','8','9','0',];

var alphabets = "AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz";

// we'll use this status dom element to display the response while verifing the code

var captcha;
generate();
document.querySelector("#login-button").addEventListener("click",check);

function generate() {
    let first = alphabets[Math.floor(Math.random() * alphabets.length)];
    let second = Math.floor(Math.random() * 10);
    let third = Math.floor(Math.random() * 10);
    let fourth = alphabets[Math.floor(Math.random() * alphabets.length)];
    let fifth = alphabets[Math.floor(Math.random() * alphabets.length)];
    let sixth = Math.floor(Math.random() * 10);
    captcha = first.toString()+second.toString()+third.toString()+fourth.toString()+fifth.toString()+sixth.toString();
    console.log(captcha);
    // . . . . . 
    document.getElementById("displayed-captcha").innerHTML = captcha;
    }

    
    function check() {
        let userValue = document.getElementById("entered-captcha").value;
        if(userValue != captcha){
        // navigate him to next page or do anything
        // tell user to enter the code again
        alert("Invalid Captcha");
        document.getElementById("entered-captcha").value = '';
    }
    }