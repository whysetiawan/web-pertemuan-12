<?php

include 'database.php';

$username = $_POST['username'];
$password = $_POST['password'];


// $query = mysqli_query($connect, "SELECT * FROM user WHERE username = 'macbook pro' AND password = '123qweasd'");

$query = mysqli_query($connect, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");

$result = mysqli_num_rows($query);

if($result > 0){
  session_start();
  $_SESSION['username'] = $username;
  $_SESSION['status'] = "LOGGED_IN";
  
  header("location: profile.php");
}
else {
  header("location: login.php");
}

// if(result > 0){
//   echo "Login Berhasil";
// }
// else{
//   echo "Login Gagal";
// }

?>
