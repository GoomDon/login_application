function registerClick(){

    /*var loginUsername = document.getElementById("login_username").value;
    var loginPassword = document.getElementById("login_username").value;*/



    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirm_password").value;
    

    if(email.includes("@")){
        var emailCheck = true;
        document.getElementById("register_area_error").innerHTML = "";
    }
    else{
        console.log("a");
        var emailCheck = false;
        document.getElementById("register_area_error").innerHTML = "Please enter a valid email";
    }
    if(password != confirmPassword){
        var passwordMatch = false;
        document.getElementById("register_area_error").innerHTML = "Your password does not match";
    }
    else{
        var passwordMatch = true;
    }   
    if(username && email && password && confirmPassword){
        var filledFields = true;    
    }
    else{
        var filledFields = false;
        document.getElementById("register_area_error").innerHTML = "Please enter all the fields above";
    }

    if(emailCheck == true && passwordMatch == true && filledFields == true){
        window.location.href = "../php/db_connection.php?Username=" + username + "&Email=" + email + "&Password=" + password;
    }
}
