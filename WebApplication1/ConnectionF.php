<?php 
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'student');

$errors = array(); 
// REGISTER USER
if (isset($_POST['submit'])) {
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$sal = mysqli_real_escape_string($db, $_POST['salutation']);
	$query = "SELECT * FROM faculty WHERE name='$name'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
	  array_push($errors, "Already Registered");
	  }
	  else{
	$dsgn = mysqli_real_escape_string($db, $_POST['role']);
	$dob = mysqli_real_escape_string($db, $_POST['dob']);
	$depart = mysqli_real_escape_string($db, $_POST['depart']);
	$contact = mysqli_real_escape_string($db, $_POST['mobile']);
	$password = mysqli_real_escape_string($db, $_POST['pass']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$sec_ques = mysqli_real_escape_string($db, $_POST['security_ques']);
	$sec_ans = mysqli_real_escape_string($db, $_POST['security_ans']);
	$intercom = mysqli_real_escape_string($db, $_POST['intercom']);
	$room = mysqli_real_escape_string($db, $_POST['room']);
	$password = password_hash($password,PASSWORD_DEFAULT);
     $pic = addslashes(file_get_contents($_FILES["photo"]["tmp_name"]));
	 $sign = addslashes(file_get_contents($_FILES["sign"]["tmp_name"]));


     // Insert record
	
	$query = "INSERT INTO `faculty` (`ID`, `Salutation`,`Name`, `DOB`, `Designation`, `Department`, `Email ID`, `Contact`, `Intercom`, `Room`, `Password`, `Security Question`, `Security Answer`,`Photo`,`Signature`) VALUES (NULL, '$sal', '$name', '$dob', '$dsgn', '$depart', '$email', '$contact', '$intercom', '$room', '$password', '$sec_ques', '$sec_ans','$pic','$sign')";
	mysqli_query($db, $query);
	
	}
	header('location:front.php');
	}

?>