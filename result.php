<?php
require "connect.php";

if (isset($_POST['submit'])){

  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $county = $_POST['county'];
  $cardname = $_POST['cardname'];
  $cardnumber = $_POST['cardnumber'];
  $expmonth = $_POST['expmonth'];

  $conn->query("INSERT INTO maximus(fullname, email, address, cardname, creditcardnumber,  Expmonth) VALUES 
  ('$fullname','$email','$address','$cardname','$cardnumber','$expmonth')") or die($conn->error());
 https://github.com/maxmigwi/php-forms.git
 header('Location: index.php');
 exit();

}