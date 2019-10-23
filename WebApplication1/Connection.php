<?php session_start();

// initializing variables
$username = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'student');

// LOGIN USER
if (isset($_POST['login_user'])) {

  $username = mysqli_real_escape_string($db, $_POST['uname']);
  $password = mysqli_real_escape_string($db, $_POST['psw']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }
  if(!empty($_POST['captcha'])){
  if(!($_POST['captcha'] == $_SESSION['vercode'])){
	array_push($errors, "Wrong Captch Code");
  }
  }
  if (count($errors) == 0) {
  //	$password = password_hash($password,PASSWORD_DEFAULT);
  if(is_numeric($username)){
  	$query = "SELECT Password FROM register WHERE Enrollment_No='$username'";
  	$results = mysqli_query($db, $query);
	$row=mysqli_fetch_assoc($results);
  	if ((mysqli_num_rows($results) == 1) and password_verify($password,$row['Password'])){
  	  $_SESSION['username'] = $username;
	  
  	  header('location: home.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }else{
		$query = "SELECT Password FROM faculty WHERE Name='$username'";
  	$results = mysqli_query($db, $query);
	$row=mysqli_fetch_assoc($results);
  	if ((mysqli_num_rows($results) == 1) and password_verify($password,$row['Password'])){
  	  $_SESSION['username'] = $username;
	 
  	  header('location: homeF.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
	mysqli_free_result($results);
  }
}
?> 