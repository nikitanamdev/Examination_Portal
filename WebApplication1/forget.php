<?php  
	session_start();
	$errors = array();
	$db = mysqli_connect('localhost', 'root', '', 'student'); 
	if(isset($_POST['forget'])){
		$password = mysqli_real_escape_string($db, $_POST['Password']);
		$cpass = mysqli_real_escape_string($db, $_POST['confirmPassword']);
	if($password !== $cpass){
		array_push($errors,"Passwords not matched!!!");
	}else{
		$username = mysqli_real_escape_string($db, $_POST['enrollment_no']);
		$sec_ques = mysqli_real_escape_string($db, $_POST['security_question']);
		$sec_ans = mysqli_real_escape_string($db, $_POST['security_ans']);
		$query = "SELECT * FROM register WHERE Enrollment_No ='$username' and Security_Question = '$sec_ques' and Security_Answer = '$sec_ans'";
  		$results = mysqli_query($db, $query);
  		if ((mysqli_num_rows($results) == 1)){
			//update
			$password = password_hash($password,PASSWORD_DEFAULT) ;
			$query = "update register set Password = '$password' where Enrollment_No = '$username'";
			mysqli_query($db,$query);
			header('location: front.php');
		}else{
			array_push($errors,"Wrong Security Details!!!");
		}
	  }
	}
?>
<!DOCTYPE html>
<html lan="en">
<head>
    <title>exam portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style1.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	 <script>
        function checkPasswordMatch() {
            var password = $("#pass").val();
            var confirmPassword = $("#cpass").val();
            if (password != confirmPassword) {
                $("#divCheckPasswordMatch").html("Passwords do not match!");
            }
            else
                $("#divCheckPasswordMatch").html("");
        }
        $(document).ready(function () {
            $("#cpass").keyup(checkPasswordMatch);
        });
  </script>
</head>
<body>
    <div id="image">
        <img src="https://img.collegepravesh.com/2015/12/IGDTUW-Logo.png" alt="IGDTUW" width="150" height="150"  style="margin-left:8%">
    </div>
	<div class="top" style=" margin-top:-10%;margin-left:23%; align:center">
	<p style="font-size:30px; color:green"><b>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</b></p>
	<p style="margin-left:33%; margin-top:-2%; font-size:20px"><b>Kashmere Gate, Delhi-110006<b></p>
	</div>
	<br>
	<hr size='10'; color='green'></hr>
    <div id="navbar" style="margin-top:-0.5%; ">
        <ul>
            <li><a class = "active" href="#home">Home</a></li>
            <li><a href="#news">Registration for convocation 2018</a></li>
            <li><a href="#contact">Convocation -2018 Guidelines</a></li>
            <li><a href="#about">About</a></li>
			<div class="dropdown">
    <li><button class="dropbtn" color='gray'>Useful Links
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Notification</a>
      <a href="https://www.onlinesbi.com/sbicollect/icollecthome.htm">SBI Collect</a>
      <a href="#">Link 3</a>
    </div>
  </div> </li>
        </ul>
    </div>
<?php include('errors.php'); ?>
		
<form method="post" action="forget.php">
	<table style="margin:10%">
	<tr>
  	<div class="form-group">
	<td><label class="col-sm-4 control-label"> Security Question</label><br></td>
	<td>	<div class="col-sm-4">
		<select class="form-control" id="focusedInput" name="security_question" required="required">
			<option value="-1">Choose:</option>
			<option value="0">What do you like.</option>
			<option value="1">Which is your favourite char.</option>
			<option value="2">whhsjjdlajls</option>
			<option value="3">wwwwwwwwww</option>
			<option value="4">whfamily</option>
		</select>
		</div></td>
	</div>
	</tr>
	<tr>
	<div class="form-group">
		<td><label class="col-sm-4 control-label">Security Answer</label></td>
		<td><div class="col-sm-4">
			<input class="form-control" id="focusedInput" type="text" name="security_ans" maxlength="30" autocomplete="off">
		</div></td>
	</div></tr>
	<tr><div class="form-group">
       <td> <label class="col-sm-4 control-label">Enrollment NO</label></td>
        <td><div class="col-sm-4">
            <input class="form-control" id="focusedInput" type="text" name="enrollment_no" required autocomplete="off">
        </div></td>
    </div></tr>
	<tr><div class="form-group">
       <td> <label class="col-sm-4 control-label">New Password</label></td>
        <td><div class="col-sm-4">
            <input class="form-control" id="pass" type="password" name="Password" maxlength="30" required="required">
        </div></td>
    </div></tr>
    <tr><div class="form-group">
       <td> <label class="col-sm-4 control-label">Confirm New Password</label></td>
       <td> <div class="col-sm-4">
            <input class="form-control" id="cpass" type="password" name="confirmPassword" maxlength="30" required="required" onChange="checkPasswordMatch();">
        </div></td>
    </div></tr>
	<tr><td></td><td><div class="registrationFormAlert" id="divCheckPasswordMatch" style="color:red;"></div></td></tr>
	</table>
	<button type="submit" class="btn" name="forget" style="float:right; width:20%; margin-right:20%; margin-top: -5%">Submit</button>
  </form>
 
<div id="last" style="margin-top: 5%" >
	<h2 style="color: white">Copyright of IGDTUW</h2>
</div>
<div id ="blc">
	<h2>IGDTUW-EXAMINATION DIVISION</h2>
</div>
</body>
</html>