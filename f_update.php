<?php
  session_start();
  if(isset($_POST['upload'])){
    $db = mysqli_connect("localhost", "root", "", "akinfo");
    $f_id = $_POST['f_id'];
    $f_name =  $_POST['f_name'];
    $f_branch =  $_POST['f_branch'];
    $f_course =  $_POST['f_course'];
    $f_email =  $_POST['f_email'];
    $f_password =  $_POST['f_password'];


    $sql = "UPDATE faculty SET name ='$f_name' , email = '$f_email',branch = '$f_branch',course = '$f_course',password = '$f_password'
     WHERE id = '$f_id'";


    if(mysqli_query($db,$sql)) {
      header('location:admin_update.php');
    }
    echo "Fuck you";
  }

 ?>
