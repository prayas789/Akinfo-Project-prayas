<?php
  session_start();
  echo $_SESSION['name'];
  if(isset($_POST['upload'])){
    $db = mysqli_connect("localhost", "root", "", "akinfo");
    $roll_no = $_POST['roll_no'];
    $message = $_POST['message'];
    $t_name =  $_SESSION['name'];


    $sql = "UPDATE signup SET message ='$message' , t_name = '$t_name' WHERE roll_no = '$roll_no'";


    if(mysqli_query($db,$sql)) {
      header('location:faculty.php');
      alert("successful");
    }
    alert("error");
  }

 ?>
