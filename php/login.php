<?php

$servername = "localhost:5050";
$username = "root";
$password = "";
$dbname = "user_login_handling";

$conn = mysqli_connect($servername,$username,$password,$dbname);


if (!$conn) {
 die('Could not connect: ' . mysqli_error($conn));
}

$username = ($_POST['login_username']);
$password = ($_POST['login_password']);

$query = $conn -> prepare("SELECT password FROM user_information WHERE username LIKE ?"); 
$query -> bind_param("s", $username);
$query -> execute();
$result = $query -> get_result();
$resultstring = mysqli_fetch_assoc($result);

if (password_verify($password, $resultstring['password'])){
        header("Location: main_page_index.php");
        $conn -> close();
}
else{
  header("Location: register_page_index.php");
}


/*if(                                                   STUFF
  $stmt -> bind_param("s", $username) &&
  $stmt -> execute() &&
  $result = $stmt -> get_result()
){
  $result_password = mysqli_fetch_assoc($result);
  $retrived_password = $result_password['password'];
  if($retrived_password != ""){
    if (password_verify($password, $retrived_password)) {
        header("Location: main_page.php");
        $con -> close();
        }
    }   
}*/

?>