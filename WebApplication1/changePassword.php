<?php  
	session_start();
	$errors = array();
	$user = $_SESSION['username'];
 if(isset($_POST['change_Pass'])){
 	 // connect to the database
$db = mysqli_connect('localhost', 'root', '', 'student'); 
	$password = mysqli_real_escape_string($db, $_POST['Password']);
	$cpass = mysqli_real_escape_string($db, $_POST['confirmPassword']);
	if($password !== $cpass){
		array_push($errors,"Passwords not matched!!!");
	}else{
		$sec_ques = mysqli_real_escape_string($db, $_POST['security_question']);
		$sec_ans = mysqli_real_escape_string($db, $_POST['security_ans']);
		if(is_numeric($user)){
		$query = "SELECT * FROM register WHERE Enrollment_No ='$user' and Security_Question = '$sec_ques' and Security_Answer = '$sec_ans'";
		}else{
		$query = "SELECT * FROM faculty WHERE Name ='$user' and `Security Question` = '$sec_ques' and `Security Answer` = '$sec_ans'";
		}
  		$results = mysqli_query($db, $query);
  		if ((mysqli_num_rows($results) == 1)){
			//update
			$password = password_hash($password,PASSWORD_DEFAULT) ;
			if(is_numeric($user)){
			$query = "update register set Password = '$password' where Enrollment_No = '$user'";
			}else{
			$query = "update faculty set Password = '$password' where Name = '$user'";
			}
			mysqli_query($db,$query);
			$link = $_SESSION['link'];
			header("location: $link");
		}else{
			array_push($errors,"Wrong Security Details!!!");
		}
	}
 }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Change Password</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width-device-width,initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style5.css">

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
    <div id="navbar">
        <ul>
            <li><a href="<?php echo $_SESSION['link']?>">Home</a></li>
            <li><a href="<?php echo $_SESSION['paper']?>">Display Papers</a></li>
            <li><a href="#contact">Attendance</a></li>
            <li><a href="#about">Results</a></li>
            <li><a href="#about">Notifications</a></li>
        </ul>
    </div>
    <br>
    <div id="navbar1">
        <ul>
            <li><a href="#enrollno.">Welcome <?php echo $user; ?></a></li>
            <li><a href="changePassword.php">Change password</a></li>
            <li><a href="front.php?logout='1'">Log Out</a></li>

        </ul>
    </div>
	  	<?php include('errors.php'); ?>
		
<form method="post" action="changePassword.php">
	<table style="margin:10%">
	<tr>
  	<div class="form-group">
	<td><label class="col-sm-4 control-label"> Security Question</label><br></td>
	<td>	<div class="col-sm-4">
		<select class="form-control" id="focusedInput" name="security_question" required="required">
			<option value="">Select Any</option>
		<option value="1">what is your pet name?</option>
		<option value="2">what is your favourite book?</option>
		<option value="3">what is your favourite movie?</option>
		<option value="4">what is your mother name?</option>
		<option value="5">what is your best friend name?</option>
		<option value="6">what is your subject?</option>
		<option value="7">what is your favourite colour?</option>
		<option value="8">what is your favourite hobby?</option>
		<option value="9">what is your favourite game?</option>
		<option value="10">what is your favourite actor name?</option>
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
	<button type="submit" class="btn" name="change_Pass" style="float:right; width:20%; margin:6%; margin-top: -9%">Reset Password</button>
  </form>
 
  <script>
  function checkPasswordMatch() {
            var password = $("#pass").val();
            var confirmPassword = $("#cpass").val();
            var pass = document.getElementById("cpass");
			pass.valid = true;
            if (password != confirmPassword) {
                $("#divCheckPasswordMatch").html("Passwords do not match!");
				pass.valid = false;
            }
            else
                $("#divCheckPasswordMatch").html("");
        }
        $(document).ready(function () {
            $("#cpass").keyup(checkPasswordMatch);
        });
  </script>
</body>
</html>