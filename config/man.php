<?php
session_start();
   $username = "";
   $email = "";
   $errors = array();
   ini_set('display_errors',1);
   error_reporting(E_ALL);

$db = mysqli_connect('localhost','root', '', 'project');
if (isset($_POST['tery']))
{
$nam= mysqli_real_escape_string($db,htmlspecialchars($_POST['nam']));
$pn_1= mysqli_real_escape_string($db,htmlspecialchars($_POST['pn_1']));
$pn_2= mysqli_real_escape_string($db,htmlspecialchars($_POST['pn_2']));
//catch form fill errors
error_reporting(E_ALL);
if(empty($nam)){
	array_push($errors, "Username is required. Try Again.");
}
if(empty($pn_1)){
	array_push($errors, "Pin is required. Try Again.");
}
if($pn_1 != $pn_2){
	array_push($errors, "Passwords do not match. Try Again.");
}
$user_check = "SELECT * FROM conf WHERE nam='$nam' LIMIT 1";
$result = mysqli_query($db, $user_check);
$user = mysqli_fetch_assoc($result);
if($user){
	if($user['nam'] === $nam){
		array_push($errors, "Username already exists. Try Again.");
	}
}
ini_set('display_errors',1);
error_reporting(E_ALL);
foreach ($errors as $error) {
  print_r($error);
}
if(count($errors) == 0) {
	$pin = md5($pn_1);
	$sql = "INSERT into conf (username, password) 
	VALUES ('$nam','$pin')";
	mysqli_query($db, $sql);
	$_SESSION['nam'] = $nam;
	$_SESSION['success'] = "You are now logged in";
	header('location:../mn.php');
}
}
if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['nam']);
	header('location:../index1.php');
}
 

?>
