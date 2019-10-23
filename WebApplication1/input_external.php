<?php

	session_start();
	$con = mysqli_connect('localhost','root','','student');
	//mysqli_select_db($con,'assessmentportal');
	if($con === false) 
	{
	die("ERROR:Could not connect.".mysqli_connect_error());
	}

	$table = $_SESSION['tablename'];
	$index = $_SESSION['callindex'];
	//$total = $_SESSION['totalstudents'];
	$index = (int)($index/10) + 1; // column index for marks for finding the subject number

	//echo '$table';
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
			$marks = $_POST['marks'];
            //$res = mysqli_query("SELECT * FROM `".$table."` WHERE 1",$con);
            $colname = "ET" . "$index";
            $i = 1;
            foreach( $marks as $key => $n ){
            	$res = "UPDATE `".$table."` SET  ".$colname." = '".$n."' WHERE serialno = '$i'";
            	$result = mysqli_query($con,$res);

            	if( $result == false )
            	{
            		echo 'fail';
            		header('location: rollno_midterm.php');

            	}
            	$i+=1;
            	//echo $i;
            }
			//echo 'success';
			
			echo "<script> alert('Marks Added Successfully'); </script>";
			$_SESSION['midterm'] = 'true';
			$_SESSION['colname'] = $colname;
			header( "refresh:1;url=papers.php" );   // after submitting marks back to papers.php
		  
			//echo 'hello';
	}
	else{
//echo 'fail1';
		header('location: rollno_midterm.php');
	}

?>