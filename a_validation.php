<?php

session_start();


$con = mysqli_connect('localhost','root');
if($con){
	echo" connection successful";
}else{
	echo " no connection";
}

mysqli_select_db($con, 'akinfo');

$id_admin = $_POST['id_admin'];

$password = $_POST['password'];
$q = " SELECT * from admin  where id_admin = '$id_admin' && password = '$password' ";

$sql = "SELECT * from admin where id_admin = '$id_admin' && password = '$password'";
$new = $con-> query($sql);
$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	 $row = $new-> fetch_assoc();
   $_SESSION['name']= $row['name'];
   $_SESSION['id_admin'] = $row['id_admin'];
	 $_SESSION['departmant'] = $row['departmant'];
	 $_SESSION['url'] = 'admin_update.php';
	 //$_SESSION['url'] = 'admin_admin.php';


	header('location:admin_update.php');
}else{

	header('location:a_login.html');
}



?>
