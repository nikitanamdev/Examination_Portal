<?php

//session_start();
$con = mysqli_connect('localhost','root','root','assessmentportal');
//mysqli_select_db($con,'assessmentportal');
if($con === false) 
{
	die("ERROR:Could not connect.".mysqli_connect_error());
}
//echo "heelo";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
$name = $_POST['user'];
$password = $_POST['password'];


$s = "SELECT * FROM `User` WHERE Name= '$name' && Password='$password' ";
$result = mysqli_query($con,$s);

if($result == true)
 { $num = mysqli_num_rows($result);
   echo $num;
	if($num == 1){
		session_start();
		$_SESSION['Name'] =$name;
		$_SESSION['pwd'] = $password; 
		header('location:home_f.php');
 	}
 	else
 	{
 		echo "<script> alert('Incorrect UserId or Password '); </script>";
         header("refresh:0;url=login_faculty.html");
 	}
}
//else
//{
//header('location: login_faculty.html');
	
//}

}
?>