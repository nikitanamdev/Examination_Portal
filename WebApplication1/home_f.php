<!DOCTYPE html>
<html lan="en">
<head>
	<title>home</title>
	<meta charset="utf-8">
	<!--<meta name ="viewport" content ="width-device-width,initial-scale=1">-->
	<link rel = "stylesheet" type = "text/css" href = "style1.css" />
	
</head>
<body>
<div>
	<p>
	    <img src="logo.jpg" alt="IGDTUW" style="width:100px; height:100px; position:relative; left: 250px; float:left; "> </p>
	    <p style="margin-top: 20px;"> </p>
	   <p style="float:right; position:relative; right:500px; color:green; font-size:20px;"> Indira Gandhi Delhi Technical University for Women
    </p>
    <br>
    <p style="margin-top: 20px;"> </p>

    <p style="float:right; position:relative; right:200px;  font-size:20px;">Kashmere Gate ,New Delhi
    </p>
</div>
<br><br><br><br>

<div  style="background-color:green; height:20px;">
	</div>
	<ul class="nav nav-tabs">
	
	<li>
	<a data-toggle="tab" href="papers.php">Registered Papers</a>
	</li>
	<li style="float:right;"><a href="logout.php">log out</a></li>
</ul>
<h2 style="margin: 40px; align:center; "> Welcome <?php session_start();
 echo $_SESSION['Name'];?> </h2>



<footer>
<div id="last" >
	<h3 style="color: white">Copyright of IGDTUW</h3>
</div>
<div id ="blc">
	<h3>IGDTUW-EXAMINATION DIVISION</h3>
</div>
</footer>
</body>
</html>
