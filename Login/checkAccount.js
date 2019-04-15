
function check(){
    var passwordCheckout = document.getElementById("password").value ;
    var usernameCheckout = document.getElementById("username").value ;
    if(passwordCheckout === "a123456" && usernameCheckout === "admin123"){
        window.location = "success.php";
        return false;
    }
    else{
        alert("Wrong Passwrd or Username");

        document.getElementById("username").disabled = true;
        document.getElementById("password").disabled = true;
        document.getElementById("submit").disabled = true;
        return false
    }
}