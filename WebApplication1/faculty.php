<?php include ('ConnectionF.php') ?>
<!DOCTYPE html>
<html lan="en">
<head>
    <title>exam portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" type="text/css" href="design.css">
	<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="js/bootstrap.min.js" rel="stylesheet">
	<script src="gen_validatorv4.js" type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
  
  <div>
   <p style="margin-left: 10%;font-size: 30px">Faculty Registration</p>
  </div>
  
  

  <br><br>
<form enctype="multipart/form-data" method="post" accept-charset="utf-8" target="ConnectionF.jsp" >
  <table width='70%' cellpadding=10px style="font-size: 20px;padding:4%">
  <tr>
  <div class="form-group">
   <td> <label class="col-sm-4 control-label">Name</label></td>
    <td width='500%'><div class="col-sm-4">
      <select name="salutation" style="height:20px" required>
		<option value="">Salutations</option>
		<option value="Dr. ">Dr.</option>
		<option value="Prof. ">Prof.</option>
		<option value="Mr. ">Mr.</option>
		<option value="Mrs. ">Mrs.</option>
		<option value="Ms. ">Ms.</option>
		<option value="Ar. ">Ar.</option>
		</select><input name="name" style="width:140px;height:20px" maxlength="100" type="text" required autocomplete="off"></div></td></div>
  <div class="form-group">
   <td> <label class="col-sm-4 control-label">Designation</label></td>
    <td><div class="col-sm-4">
   <select name="role" style="height:30px"  required >
	<option value="">Select Any</option>
	<option value="Professor">Professor</option>
	<option value="Associate Professor">Associate Professor</option>
	<option value="Assistant Professor">Assistant Professor</option>
	<option value="TRF">TRF</option>
	<option value="Visiting Faculty">Visiting Faculty</option>
   </select></div></td></div></tr>

   <tr><div class="form-group"><td><label class="col-sm-4 control-label">Department</label></td>
   <td><div class="col-sm-4">
   <select name="depart" style="height:30px" required>
	<option value="">Select Any</option>
	<option value="Information Technology">Information Technology</option>
	<option value="Computer Science">Computer Science</option>
	<option value="Mechanical and Automation Engineering">Mechanical and Automation Engineering</option>
	<option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
	<option value="Basic Applied Science">Basic Applied Science</option>
	<option value="Research and Collaboration">Research and Collaboration</option>
	<option value="Architecture and Planning">Architecture and Planning</option>
   </select></div></td></div>
   <div class="form-group">
   <td><label class="col-sm-4 control-label">Date Of Birth</label></td>
   <td><div class="col-sm-4"><input  type="date" min="1975-01-01" max="2040-12-31" name="dob" required="" autocomplete="off"></div></td></div></tr>

<tr><div class="form-group">
   <td> <label class="col-sm-4 control-label">Email Id </label></td>
<td><div class="col-sm-4">
<input name="email" type="email"  required autocomplete="off"> </div></td></div>
<div class="form-group">
   <td> <label class="col-sm-4 control-label"> Mobile No.</label></td>
   <td> <div class="col-sm-4">
   <input name="mobile" style="width:190px;height:20px" maxlength="10" type="tel" pattern="^\d{10}$"  required autocomplete="off"></div></td></div></tr>

<tr><div class="form-group">
   <td> <label class="col-sm-4 control-label">Intercom No. </label></td>
<td><div class="col-sm-4"><input name="intercom" style="width:190px;height:20px" maxlength="11" type="text"  required autocomplete="off"></div></td></div>
<div class="form-group">
   <td> <label class="col-sm-4 control-label">Room No. </label> </td>
   <td><div class="col-sm-4"><input name="room" style="width:190px;height:20px" type="number"  required autocomplete="off"></div></td></div></tr>

<tr><div class="form-group">
   <td> <label class="col-sm-4 control-label">Upload Your Photo </label></td>
   <td><div class="col-sm-4"><input type="file" name="photo" style="height:20px"  required autocomplete="off"></div></td></div>
<div class="form-group">
   <td> <label class="col-sm-4 control-label">Upload Your Signature </label></td>
   <td><div class="col-sm-4"><input type="file" name="sign"></div></td></div></tr>

<tr><div class="form-group">
   <td> <label class="col-sm-4 control-label"> Security Question</label></td>
   <td><div class="col-sm-4"><select name="security_ques"  required>
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
	</select></div></td></div>
<div class="form-group">
   <td> <label class="col-sm-4 control-label">Security Answer</label></td>
   <td><div class="col-sm-4"><input name="security_ans" type="text"  required autocomplete="off"></div></td></div></tr>

<tr><div class="form-group">
   <td> <label class="col-sm-4 control-label"> Password</label></td>
   <td><div class="col-sm-4"><input id= "pass" name="pass" type="password" style="width:auto"  required autocomplete="off"></div></td></div>
<div class="form-group">
   <td> <label class="col-sm-4 control-label">Confirm Password</label></td>
   <td><div class="col-sm-4"><input id="cpass" name="confirm" type="password"  required autocomplete="off" onChange="checkPasswordMatch();" ></div>
</td></div></tr>

<tr><td></td><td></td><td></td><td><div class="registrationFormAlert" id="divCheckPasswordMatch" style="color:red;"></div></td></tr>
</table>
<center>
<br><br>      
<button type="submit" name ="submit" class="btn btn-success btn-md" style="width:7%">SUBMIT</button>                        <wbr>                 
       
<button type="reset" name="reset" class="btn btn-success btn-md" style="width:7%">Reset</button>

</center>
</form>
<div id="last" style="margin-top:2%">
	<h2 style="color: white">Copyright of IGDTUW</h2>
</div>
<div id ="blc">
	<h2>IGDTUW-EXAMINATION DIVISION</h2>
</div>
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
</body>
</html>