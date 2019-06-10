<?php

session_start();
$con = mysqli_connect('localhost','root');
if($con){
	echo" connection successful";
}else{
	echo " no connection";
}

mysqli_select_db($con, 'akinfo');


//$name = $_GET['name'];
$roll_no = $_POST['roll_no'];
//$student_id = $_POST['student_id'];
//$email = $_POST['email'];
$password = $_POST['password'];
$q = " select * from signup  where roll_no = '$roll_no' && password = '$password' ";
//$sql = mysqli_query("SELECT name FROM signup ORDER BY name");
//$new = mysqli_query($con, $sql);
//$sql = "SELECT * from signup where roll_no = '$roll_no' && password = '$password'";
//$new = $con-> query($sql);
$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	 $row = $result-> fetch_assoc();
   $_SESSION['name']=$row['name'];
   $_SESSION['roll_no'] = $row['roll_no'];
   $_SESSION['student_id'] = $row['student_id'];
   $_SESSION['email'] = $row['email'];
	 $_SESSION['course'] = $row['course'];
	 $_SESSION['branch'] = $row['branch'];
	 $_SESSION['sem'] = $row['sem'];
	 $_SESSION['section'] = $row['section'];
	 $_SESSION['message'] = $row['message'];
	 $_SESSION['t_name'] = $row['t_name'];
	 $_SESSION['url'] = 'student.php';

	header('location:student.php');


}else{

	header('location:login.html');
}



?>
