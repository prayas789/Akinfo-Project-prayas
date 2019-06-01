<?php
  session_start();
  if(isset($_POST['f_search'])){

    $db = mysqli_connect("localhost", "root", "", "akinfo");

    $f_id = $_POST['f_id'];

		$sql = "SELECT * from faculty where id = '$f_id'";
    $result = mysqli_query($db, $sql);
		$num = mysqli_num_rows($result);
		$new = $db-> query($sql);
		if($num == 1){
			 $row = $new-> fetch_assoc();
		   $_SESSION['f_id']=$row['id'];
		   $_SESSION['f_name'] = $row['name'];
		   $_SESSION['f_course'] = $row['course'];
		   $_SESSION['f_branch'] = $row['branch'];
			 $_SESSION['f_email'] = $row['email'];
       $_SESSION['f_sem'] = $row['sem'];
       $_SESSION['f_section'] = $row['section'];
	header('location:search_results.php');
		}else{
	header('location:admin_search.php');
		}
}

if(isset($_POST['s_search'])){

	$db = mysqli_connect("localhost", "root", "", "akinfo");

	$s_roll_no = $_POST['roll_no'];

	$sql = "SELECT * from signup where roll_no = '$s_roll_no'";
	$result = mysqli_query($db, $sql);
	$new = $db-> query($sql);
	$num = mysqli_num_rows($result);

	if($num == 1){
		 $row = $new-> fetch_assoc();
		 $_SESSION['f_id']=$row['id'];
		 $_SESSION['f_name'] = $row['name'];
		 $_SESSION['f_course'] = $row['course'];
		 $_SESSION['f_branch'] = $row['branch'];
		 $_SESSION['f_email'] = $row['email'];
		 $_SESSION['f_branch'] = $row['branch'];
		 $_SESSION['f_sem'] = $row['sem'];
		 $_SESSION['f_section'] = $row['section'];
     header('location:search_results.php');
	}else{
	   header('location:admin_search.php');
	}
}


 ?>
