function validate(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
    if ( username == "test" && password == "pass"){
        //alert ("Login successfully");
        window.location = "popular.html"; 
    return false;
    }
    else{
        alert("Please enter the correct login and password");
    }
}