<?php include('Connection.php'); ?>
<?php include('errors.php'); ?>
<?php
  if (isset($_GET['logout'])) {
  mysqli_close($db);
  	session_destroy();
  	unset($_SESSION['username']);
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
        <img src="https://img.collegepravesh.com/2015/12/IGDTUW-Logo.png" alt="IGDTUW" width="100" height="100" left="50%">
    </div>

    <div id="navbar">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#news">Registration for convocation 2018</a></li>
            <li><a href="#contact">Convocation -2018 Guidelines</a></li>
            <li><a href="#about">About</a></li>
        </ul>
    </div>
    <div id="maincontent">
        <h2 style="color: red">
            Result of May 2019 has been declared
        </h2>
        <p style="color: blue">For result please visit university website</p>
        <div class="notice">
            <p>NOTICE</p>
        </div>
        <div class="leftnotice">
            <img src="logo1.jog" width="30" height="30">
            <p>Best Viwed in Google chrome</p>


        </div>
        <div class="leftnotice1">
            <p>WELCOME TO IGDTUW</p>

            <p style="color: green">NEW FACULTY REGISTRATION</p>
            <p>Pay Transcript Fee/Recharge Fee at>><a href="https://www.onlinesbi.com/sbicollect/icollecthome.htm"> <h4 style="color: blue">SBI COLLECT</h4></a>||RECHECKING FORM</p>

            <p style="color: green">LATEST INFORMATION</p>
            <p> For assistance Contact Us:</p>
            <p>Ms Khyati Ahlawat,Assistant Prof,CSE</p>
            <p>Er Sagar Goel,System Analyst</p>
        </div>



        <div class="frm">
            <form action="front.php" method="post">
                <div class="container">
                    <div class="lgn">
                        <p style="text-align: left;">LOGIN</p>
                    </div>
                    <label for="uname"><b></b></label>
                    <input type="text" placeholder="User Id" name="uname" required>
                    <br>
                    <label for="psw"><b></b></label>
                    <input type="password" placeholder="Password" name="psw" required>
                    <br>

                </div>



                <div class="container" style="background-color:white">
                    <button type="submit" class="sbmtbtn" name="login_user">Login</button>
                    <span class="psweml"><a href="#">Password reset via email</a></span>
                    <br>
                    <span class="psw"> <a href="#">Forgot password?</a></span>

                </div>
                <hr>
                <div class="nw" style="text-align: center;">
                    <p>New Student<a href="registeration1.html">Registere Here</a></p>
                </div>
            </form>
			<div class="error">
			</div>
        </div>


    </div>
    <div id="last">
        <h2 style="color: white">Copyright of IGDTUW</h2>
    </div>
    <div id="blc">
        <h2>IGDTUW-EXAMINATION DIVISION</h2>
    </div>
</body>
</html>