<?php
  session_start();
  if(isset($_POST['upload'])){
    $db = mysqli_connect("localhost", "root", "", "akinfo");
    $s_roll_no = $_POST['s_roll_no'];
    $s_student_id = $_POST['s_student_id'];
    $s_name =  $_POST['s_name'];
    $s_branch =  $_POST['s_branch'];
    $s_sem =  $_POST['s_sem'];
    $s_course =  $_POST['s_course'];
    $s_email =  $_POST['s_email'];
    $s_password =  $_POST['s_password'];


    $sql = "UPDATE signup SET name ='$s_name' , email = '$s_email',branch = '$s_branch',course = '$s_course',password = '$s_password',
    sem ='$s_sem', student_id= '$s_student_id'     WHERE roll_no = '$s_roll_no'";


    if(mysqli_query($db,$sql)) {
      header('location:admin_update.php');
    }
    echo "Fuck you";
  }

 ?>
