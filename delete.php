<?php
  session_start();
  echo $_SESSION['name'];
      $db = mysqli_connect("localhost", "root", "", "akinfo");
  if(isset($_GET['delete'])){

    $id = $_GET['delete'];
    $sql = "DELETE FROM photos WHERE id = '$id'";


    if(mysqli_query($db,$sql)) {
    header('location:delete_notice.php');
    }
    echo "error";
  }

 ?>
