<?php

$servername = "localhost:5050";
$username = "root";
$password = "";
$dbname = "user_login_handling";

$conn = mysqli_connect($servername,$username,$password,$dbname);


$username = ($_POST['register_username']);

$query = $conn -> prepare("SELECT username FROM user_information WHERE username LIKE ?"); 
$query -> bind_param("s", $username);
$query -> execute();
$result = $query -> get_result();
$resultstring = mysqli_fetch_assoc($result);

if(!empty($resultstring)){
  echo '<script>alert("Username already exists")</script>';
  //header("Location: register_page_index.php")
}
/*
function verification($string){
    $username_symbols = "/[a-z, A-Z, 0-9\+]/";
    $email_symbols = "/^[a-zA-Z0-9\.]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+$/";
    $password_symbols = "/^[a-zA-Z0-9]+$/"; //add more symbols
}
  */
  
  
?>