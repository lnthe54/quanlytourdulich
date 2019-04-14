function check(){
var passwordCheckout = document.getElementById("password").value ;
var usernameCheckout = document.getElementById("username").value ;
var login = false;
    if(passwordCheckout === "a123456" && usernameCheckout === "admin123"){
        login = true;
    }
    else{
        alert("Wrong PassWord or UserName");
    }
    if(login === true){
        return true;
    }
    else{
        return false;
    }
}