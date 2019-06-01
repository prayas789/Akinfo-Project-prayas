<?php
  session_start();


  if(isset($_POST['upload'])){

    $target =  "assig/".basename($_FILES['image']['name']);
    $db = mysqli_connect("localhost", "root", "", "akinfo");
    $image = $_FILES['image']['name'];
    $text = $_POST['text'];
    $sem = $_POST['sem'];
    $section = $_POST['section'];
    $val1 = strtotime($_POST["val1"]);
    $val1 = date('Y-m-d H:i:s', $val1);
    $val2 = strtotime($_POST["val2"]);
    $val2 = date('Y-m-d H:i:s', $val2);
    $deadline = $_POST['deadline'];
    $branch = $_SESSION['branch'];


    $sql = "INSERT INTO assig (image, text, val1, val2, deadline, branch, sem, section) VALUES
    ('$image','$text','$val1','$val2','$deadline','$branch','$sem','$section')";
    mysqli_query($db,$sql);

    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      header('location:f_assig_view.php');
    }else {
      echo "Error";
    }
  }

 ?>
