<?php
  session_start();
$db = mysqli_connect('localhost', 'root', '', 'student');
$user = $_SESSION['username'];
$_SESSION['link'] = 'homeF.php';
$_SESSION['paper'] = 'selectPapers.php';
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
            <li><a href="#">Home</a></li>
            <li><a href="selectPapers.php">Display Papers</a></li>
            <li><a href="papers.php">Upload Marks</a></li>
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
    <?php
	$query = "SELECT * FROM faculty WHERE Name='$user'";
    $results = mysqli_query($db, $query);
    $row=mysqli_fetch_assoc($results);
	$imagesrc = 'data:image/jpeg;base64,'.base64_encode( $row['Photo'] ).'';
	$image2src = 'data:image/jpeg;base64,'.base64_encode( $row['Signature'] ).'';
    ?>
    <div id="maincontent">

        <div id="details">

            <div class="det" style="height: 10%;background-color:green;">
                <p style="color: white;background-color:green;">Profile</p>
            </div>
			<br><br>
            <img src="<?php echo $imagesrc; ?>" style="text-align: center" class="img-circle" height='100%' width ='100%' alt="Profile Pic">
			<br>
			<img src="<?php echo $image2src; ?>" style="text-align: center" class="img-circle" height='100%' width ='100%' alt="Profile Pic">
            <hr>

            <div class="stt">
                <p>Name:<?php echo $row["Salutation"].$user;?></p>
                <hr style="border-top: dotted 1px;" />
                <br>

            </div>
        </div>
        <div id="side" style="margin-top: -29%;">
            <br>
            <p style="text-align: center;font-size: 24px">Faculty BASIC DETAILS</p>
            <br><br>
            <div id="as" style="font-size: 20px;margin-top: -8%">
                <p>Intercom No:               <?php echo $row["Intercom"];?></p>
				<p>Room No:                   <?php echo $row["Room"];?></p>
				<p>Designation:               <?php echo $row["Designation"];?> </p>
				<p>Department:                <?php echo $row["Department"];?></p>
                <p>Mobile No. :               <?php echo $row["Contact"];?></p>
				<p>Email-Id :                 <?php echo $row["Email ID"];?></p>
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