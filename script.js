/*
script.js file linked to index.html which helps user see the password 
and suggest a strong random password for the user if required.
It uses JQuery for code improvisation

@author Kinshuk Chadha/
*/

//set the inital value to be false meaning password cant be seen
let viewLoginPwd = false;

/*
Function which changes the password field to text and hide it again if required
*/
function changePwdView() {
    let getPwdView = $("#password");

    if(viewLoginPwd === false){
        //change to text so password can be seen
        getPwdView.attr('type', 'text');
        viewLoginPwd = true;
    }
    else if(viewLoginPwd === true) {
        //change to password so password can't be seen
        getPwdView.attr('type', 'password');
        viewLoginPwd = false;
    }
}

/*
Function which suggests a random password for the user 
*/
function suggestPwd() {
    let randomstring = Math.random().toString(16).slice(-10); //length = 10 char
    alert("Random Password Generated");
    $('#password').val(randomstring);
}