<?php
  session_start();
$db = mysqli_connect('localhost', 'root', '', 'student');
$user = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lan="en">
<head>
    <title>exam portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style5.css" />

</head>
<body>

    <div id="image">
        <img src="url('https://img.collegepravesh.com/2015/12/IGDTUW-Logo.png')" alt="IGDTUW" width="50" height="50" align="center">
    </div>

    <div id="navbar">
        <ul>
            <li><a href="http://igdtuw.ac.in">Home</a></li>
            <li><a href="paper.php">Display Papers</a></li>
            <li><a href="#contact">Attendance</a></li>
            <li><a href="#about">Results</a></li>
            <li><a href="#about">Notifications</a></li>
        </ul>
    </div>
    <br>
    <div id="navbar1">
        <ul>
            <li><a href="#enrollno.">Welcome <?php echo $user; ?></a></li>
            <li><a href="#news">Change password</a></li>
            <li><a href="front.php?logout='1'">Log Out</a></li>

        </ul>
    </div>
    <?php
	$query = "SELECT * FROM register WHERE Enrollment_No='$user'";
    $results = mysqli_query($db, $query);
    $row=mysqli_fetch_assoc($results);
    ?>
    <div id="maincontent">

        <div id="details">

            <div class="det">
                <p>Profile</p>
            </div>
            <img src="photo.jpg" style="text-align: center" class="img-circle" alt="Logo">
            <hr>

            <div class="stt">
                <p>Enrollment No1:<?php echo $user;?></p>
                <hr style="border-top: dotted 1px;" />
                <p>Name:<?php echo $row["Name"];?></p>
                <hr style="border-top: dotted 1px;" />
                <p>Semester:<?php echo $row["Semester"];?></p>
                <hr style="border-top: dotted 1px;" />
                <br>

            </div>
        </div>
        <div id="side">
            <br>
            <p style="text-align: center;">STUDENT BASUC DETAILS</p>
            <br><br>
            <div id="as">
                <p>Father's Name:             <?php echo $row["Father's_Name"];?></p>
                <p>Mother's Name:             <?php echo $row["Mother's_Name"];?></p>
				<?php 
				$add = $row["Address Line 1"];
				$distt = $row["District"];
				$state = $row["State"];
				$pin = $row["Pincode"];
				$a = $add.', '.$distt.', '.$state.'-'.$pin;
				?>
                <p>Address:                   <?php echo $a;?></p>
                <br>
                <br>
                <p>Mobile No. :               <?php echo $row["Contact_No"];?></p>
                <p>Email-Id :                 <?php echo $row["Email_ID"];?></p>
            </div>
            <br><br><br><br>
        </div>
    </div>
    <div id="last">
        <h2 style="color: white">Copyright of IGDTUW</h2>
    </div>
    <div id="blc">
        <h2>IGDTUW-EXAMINATION DIVISION</h2>
    </div>
    <?php
    mysqli_free_result($results);
    mysqli_close($db);?>
</body>
</html>