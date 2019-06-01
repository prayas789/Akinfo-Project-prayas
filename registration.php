<?php

session_start();

$con = mysqli_connect('localhost','root');
if($con){
	echo" connection successful";
}else{
	echo " no connection";
}

mysqli_select_db($con, 'akinfo');

$name = $_POST['name'];
$roll_no = $_POST['roll_no'];
$student_id = $_POST['student_id'];
$email = $_POST['email'];
$course = $_POST['course'];
$branch = $_POST['branch'];
$sem = $_POST['sem'];
$section = $_POST['section'];
$password = $_POST['password'];

$q = " select * from signup  where roll_no = '$roll_no' && password = '$password' ";


$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	echo" duplicate data ";

}else{

	$qy= " insert  into signup(name, roll_no, student_id, email, course , branch , sem, section , password) values
	('$name' ,'$roll_no','$student_id','$email', '$course', '$branch','$sem', '$section' , '$password') ";
	mysqli_query($con, $qy);
	echo "inserted";
	header('location:login.html');
//	/
//	$_SESSION['name'] = $name;
//	$_SESSION['roll_no'] = $roll_no;
//	$_SESSION['student_id'] = $student_id;
//	$_SESSION['email'] = $email;
}



?>
