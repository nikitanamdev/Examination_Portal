<?php  


session_start();
$con = mysqli_connect('localhost','root','','student');
//mysqli_select_db($con,'assessmentportal');
if($con === false) 
{
	die("ERROR:Could not connect.".mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{         $name = $_SESSION['username']; 
	      $subcode =   $_SESSION['SubCode'] ;        
             $branch= $_SESSION['Branch'];
             $sem =  $_SESSION['Sem'] ;
             $query1 = "UPDATE `faculty1` SET `Freeze`='1' WHERE Name = '$name' && SubCode = '$subcode' && Sem = '$sem' &&  Branch='$branch'";
             $result1 = mysqli_query($con,$query1);
      echo "<script> alert('Marks Submitted Successfully'); </script>";
      //$_SESSION['midterm'] = 'true';
      //$_SESSION['colname'] = $colname;
     header("refresh:1;url=papers.php");
  }
?>