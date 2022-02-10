<?php

$servername = "localhost:5050";
$username = "root";
$password = "";
$dbname = "user_login_handling";

$conn = mysqli_connect($servername,$username,$password,$dbname);


if (!$conn) {
 die('Could not connect: ' . mysqli_error($conn));
}



  $username = ($_GET['Username']);
  $password = ($_GET['Password']);
  $email = ($_GET['Email']);

  $hashedPassword = PASSWORD_HASH($password, PASSWORD_DEFAULT);

  $stmt = $conn->prepare("INSERT INTO user_information (username, password, email) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $username, $hashedPassword, $email);
  $stmt->execute();

  header("Location: register_page_index.php");
  $conn -> close();

?>