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
$id = $_POST['id'];
//$student_id = $_POST['student_id'];
//$email = $_POST['email'];
$password = $_POST['password'];
$q = " select * from faculty  where id = '$id' && password = '$password' ";
//$sql = mysqli_query("SELECT name FROM signup ORDER BY name");
//$new = mysqli_query($con, $sql);
$sql = "SELECT * from faculty where id = '$id' && password = '$password'";
$new = $con-> query($sql);
$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	 $row = $new-> fetch_assoc();
   $_SESSION['name']=$row['name'];
   $_SESSION['id'] = $row['id'];
   $_SESSION['email'] = $row['email'];
	 $_SESSION['course'] = $row['course'];
	 $_SESSION['branch'] = $row['branch'];
	 $new_course = $row['course'];
	 $_SESSION['url'] = 'faculty.php';
	 $_SESSION['url_dash'] = 'dashboard.php';
	 $_SESSION['url_assig'] = 'assignment.php';



	header('location:faculty.php');


}else{

	header('location:f_login.html?error=1');
}



?>
