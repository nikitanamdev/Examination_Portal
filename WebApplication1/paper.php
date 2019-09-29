<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'student');
$user = $_SESSION['username'];
$sem= 0;
?>
<!DOCTYPE html>
<html lan="en">
<head>
    <title>paper registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style5.css" />

</head>
<body>

    <div id="image">
        <img src="logo.jpg" alt="IGDTUW" width="50" height="50">
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

    <div id="maincontent">



    </div>
    <div id="side">
        <p>PAPER REGISTRATION</p>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>   <br>

        <?php
		$query = "SELECT * FROM register WHERE Enrollment_No='$user'";
        $results = mysqli_query($db, $query);
        $row=mysqli_fetch_assoc($results);
        $branch = $row["Branch"];
        $course = $row["Course"];
        $sem = $row["Semester"]; 
		if (isset($_POST['submit'])){
	if(!empty($_POST['paper'])) {
    foreach($_POST['paper'] as $p) {
		$q1="select * from papers where code='$p' and semester='$sem'";
		$res = mysqli_query($db, $q1);
		$rec = mysqli_fetch_assoc($res);
		$code = $rec["Code"];
		$title = $rec["Title"];
		$l = $rec["L"];
		$t = $rec["T"];
		$p = $rec["P"];
		$credits = $rec["Credits"];
		$cat = $rec["Category"];
		$q2 = "Insert into student_papers values(null,'$user','$code','$title',$l,$t,$p,$credits,'$cat')";
		mysqli_query($db, $q2);
		mysqli_free_result($res);
	}
   }
  }
		$q = "select * from student_papers where enrollment_no ='$user'";
        $results2 = mysqli_query($db, $q);
		if (mysqli_num_rows($results2) >= 1) {   //already registered
      ?>
       <div id="selected">
	   <table cellpadding=10px>
	  <?php while($rows=mysqli_fetch_assoc($results2)){?>
	  <tr>
	  <td><?php echo $rows["Paper_Code"];?></td>
	  <td><?php echo $rows["P_Title"];?></td>
	  <td><?php echo $rows["L"];?></td>
	  <td><?php echo $rows["T"];?></td>
	  <td><?php echo $rows["P"];?></td>
	  <td><?php echo $rows["Credits"];?></td>
	  <td><?php echo $rows["Category"];?></td>
	  </tr>
	  <?php 
	  }?>
	 </table>
	   </div>
       <?php 
	   }else{									//not registered
		 ?>

        <div id="select">
            <form action="#" method="post">
                <?php
				
		
        if($sem==1 or $sem==2){
        $q = "select * from papers where course='$course' and semester = $sem";
        }else{
        $q = "select * from papers where course='$course' and semester = $sem and branch = '$branch'";
        }
        $results2 = mysqli_query($db, $q);
        ?>
		<table cellpadding=10px>
		<?php
                while($rows=mysqli_fetch_assoc($results2)){
                ?>
               <tr><td> <input type="checkbox" name="paper[]" value="<?php echo $rows["Code"]?>"></td>
			   <td> <?php echo $rows["Code"];?></td>
			   <td> <?php echo $rows["Title"];?></td>
			   <td><?php echo $rows["L"];?></td> 
			   <td><?php echo $rows["T"];?></td>
			   <td><?php echo $rows["P"];?></td>
			   <td><?php echo $rows["Credits"];?></td>	
			   <td><?php echo $rows["Category"];?></td></tr><br>
                
                <?php } ?>
			
                <tr><td><button type="submit" class="sbmtbtn" name="submit">Register papers</button></td></tr>
					</table>
            </form>
        </div>
		<?php 
				mysqli_free_result($results);
		}
	
mysqli_free_result($results2);


		mysqli_close($db);
		?>
    </div>


    <div id="last">
        <h2 style="color: white">Copyright of IGDTUW</h2>
    </div>
    <div id="blc">
        <h2>IGDTUW-EXAMINATION DIVISION</h2>
    </div>
</body>
</html>