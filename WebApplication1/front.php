<?php include('Connection.php'); ?>
<?php
  if (isset($_GET['logout'])) {
  mysqli_close($db);
  	session_destroy();
  	unset($_SESSION['username']);
	unset($_SESSION['pwd']);
 unset($_SESSION['SubCode']);
 unset($_SESSION['Branch']);
  unset($_SESSION['Sem']);
    unset($_SESSION['tablename']);
    unset($_SESSION['callindex']);
  }
?>
<!DOCTYPE html>
<html lan="en">
<head>
    <title>exam portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style1.css" />
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
    <div id="maincontent">
	<?php include('errors.php'); ?>
       <h2 style="color: red" style="font-family:Arial;">
	Result of May 2019 Has Been Declared</h2>
	<p style="color: blue">For Result Please Visit University Website</p>
  <div class="marquee" style="background:#E4FFC0">
  <p style="color:darkseagreen">For Students Admitted Upto 2018,Next Semester Paper Registration Has Been Started.For Further details ,<a href="" style="color:green">Click Here!</a></p>
</div>
	
	<div class="leftnotice" style="margin-left:40%">
		<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Google_Chrome_icon_%28September_2014%29.svg/1024px-Google_Chrome_icon_%28September_2014%29.svg.png" class="img-circle" alt="Logo" width="60" height="60">
		<p>Best Viewed in Google Chrome</p>
		
		
	</div>
	<div class="leftnotice1">
    <br>
		<h3 style="text-align: center;margin-left:-7%">WELCOME TO EXAMINATION </h3>
    <br>
		  <p style="font-weight: bold;">INSTRUCTIONS :</p>
      <p>1. Create User Id and Password using Registration System.</p>
      <p>2. Login with created User Id and Password.</p>
      <p>3. Fill Examination From.</p>
      <div id="det" style="font-size: 13px; margin-top:15%">
		    <p style="font-weight: bold;"> For assistance Contact Us :</p>
        <p>Ms Khyati Ahlawat,Assistant Prof,CSE</p>
        <p>Er Sagar Goel,System Analyst</p>
      </div>
      <div class="marquee1">
  <p style="font-weight: bold;">For Any Discrepency Please Mail To :support.exam@igdtuw.ac.in</p>
</div>
    </div>

       <div class ="frm">
<form action="front.php" method="post"  onsubmit="return checkform(this);">
  

  <div class="container">
  	<div class="lgn" style="background:green">
  		<p style="text-align: left;">LOGIN</p>
  	</div>
    <label for="uname"><b></b></label>
    <input type="text" placeholder="User Id" name="uname" required autocomplete="off">
   <br>
    <label for="psw"><b></b></label>
    <input type="password" placeholder="Password" name="psw" required autocomplete="off">
 <br>
   
  </div>
   
 <!-- START CAPTCHA -->
<br>
<div class="capbox">

<div id="CaptchaDiv"></div>

<div class="capbox-inner">
Type the above number:<br>

<input type="hidden" id="txtCaptcha">
<input type="text" name="CaptchaInput" id="CaptchaInput" size="15"><br>

</div>
</div>
<br><br>
<!-- END CAPTCHA -->


  <div class="container" style="background-color:white">
     <button type="submit" name="login_user" class="sbmtbtn" style="background:green">Login</button>
    <br>
    <span class="psw"> <a href="forget.php">Forgot password?</a></span>

  </div>
  <hr>
  <div class="nw" style="text-align: center;">
  	<p>New Student<a href="registeration1.html">Registere Here</a></p>
	<p>New Faculty<a href="faculty.php">Registere Here</a></p>
  </div>
</form> 
</div>
	
</div>
<div id="last" >
	<h2 style="color: white">Copyright of IGDTUW</h2>
</div>
<div id ="blc">
	<h2>IGDTUW-EXAMINATION DIVISION</h2>
</div>
<script type="text/javascript">

// Captcha Script

function checkform(theform){
var why = "";

if(theform.CaptchaInput.value == ""){
why += "- Please Enter CAPTCHA Code.\n";
}
if(theform.CaptchaInput.value != ""){
if(ValidCaptcha(theform.CaptchaInput.value) == false){
why += "- The CAPTCHA Code Does Not Match.\n";
}
}
if(why != ""){
alert(why);
return false;
}
}

var a = Math.ceil(Math.random() * 9)+ '';
var b = Math.ceil(Math.random() * 9)+ '';
var c = Math.ceil(Math.random() * 9)+ '';
var d = Math.ceil(Math.random() * 9)+ '';
var e = Math.ceil(Math.random() * 9)+ '';

var code = a + b + c + d + e;
document.getElementById("txtCaptcha").value = code;
document.getElementById("CaptchaDiv").innerHTML = code;

// Validate input against the generated number
function ValidCaptcha(){
var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
var str2 = removeSpaces(document.getElementById('CaptchaInput').value);
if (str1 == str2){
return true;
}else{
return false;
}
}

// Remove the spaces from the entered and generated code
function removeSpaces(string){
return string.split(' ').join('');
}
</script>

</body>
</html>