<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $number = $_POST['number'];
  $message = $_POST['message'];
  
  $data = "Name: $name\ Number: $number\ Message: $message\n";
  
  file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
}
?>