<?php
$servernmae = "localhost";
$username = "root";
$password = "";
$database = "logre";

//create connection

msqli_connect($servername , $username , $password , $database) or die(msqli($conn));
 



require "login.php";
  if (esset($_POST['submit'])){

  $username = $_POST['username'];
  $password = $_POST['password'];


  $con->query("INSERT INTO regestration(username, password) VALUES
  ('$password' , '$username')") or die($conn->error());
  header("location:login.php");
  exit();

  }
?>