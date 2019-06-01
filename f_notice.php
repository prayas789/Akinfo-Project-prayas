<?php
  session_start();
  if(isset($_POST['upload'])){

    $target =  "images/".basename($_FILES['image']['name']);

    $db = mysqli_connect("localhost", "root", "", "akinfo");

    $image = $_FILES['image']['name'];
    $text = $_POST['text'];
    $val1 = strtotime($_POST["val1"]);
    $val1 = date('Y-m-d H:i:s', $val1);
    $val2 = strtotime($_POST["val2"]);
    $val2 = date('Y-m-d H:i:s', $val2);
    $deadline = $_POST['deadline'];
    $imp = '0';

    $sql = "INSERT INTO photos (image, text, val1, val2, deadline,imp) VALUES ('$image','$text','$val1','$val2','$deadline','$imp')";
    mysqli_query($db,$sql);

    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      header('location:latest_notice.php');
    }else {
      echo "Error";
    }
  }

 ?>
