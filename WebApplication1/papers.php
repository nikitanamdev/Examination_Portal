<!DOCTYPE html>
<html lan="en">
<head>
	<title>assessment portal</title>
	<meta charset="utf-8">
	<!--<meta name ="viewport" content ="width-device-width,initial-scale=1">-->
	
	<link rel = "stylesheet" type = "text/css" href = "style1.css" />
	<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
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
	
	<li class="active">
	<a data-toggle="tab" href="#home">Registered Papers</a>
	</li>
	<li style="float:right;"><a href="front.php?logout='1'">log out</a></li>
</ul>


<?php 

session_start();
$con = mysqli_connect('localhost','root','','student');
//mysqli_select_db($con,'assessmentportal');
if($con === false) 
{
	die("ERROR:Could not connect.".mysqli_connect_error());
}
 
 $name = $_SESSION['username']; 
 
 /**  $sql =  "SELECT * FROM `Faculty` WHERE Name= '$name' ";
 $result = mysqli_query($con,$sql);
 //$row = mysqli_fetch_array($result,MYSQLI_NUM);
 $i = 2;
while($obj = mysqli_fetch_row($result))
{  $fieldcount = mysqli_num_fields($result);

      while($i<$fieldcount)
	     {  //printf("%s \t %s \t %s ",$obj[$i],$obj[$i+1],$obj[$i+3]);   statemnt that prints the diif column values
      //echo '<br />';
	 if($obj[$i+2] !=0 )
	 {      //to find whether the subject has a pratical part or not
        $query = "SELECT Practical FROM `subject` WHERE SubjectCode = '$obj[$i]'";
         $result1 = mysqli_query($con,$query);
          $row = mysqli_fetch_assoc($result1);
          //echo $row['Practical'];
     ?>  
               <table style=" position:relative; left:50px; width:80%; margin-top:50px; text-align:center;">  <!-- table code -->
			<tr>
         				    <td><?php  printf("%s",$obj[$i]); ?></td>
          					<td><?php  printf("%s",$obj[$i+1]); ?></td>
          					<td><?php  if($obj[$i+2] == 20) 
          					             printf("CSE1"); 
          					            else if($obj[$i+2] == 21)
          					             printf("CSE2");
          					            else if($obj[$i+2] == 22)
          					             printf("IT1");
          					            else if($obj[$i+2] == 23)
          					             printf("IT2");
          					            else if($obj[$i+2] == 24)
          					             printf("ECE");
          					            else if($obj[$i+2] == 25)
          					             printf("MECH");
          					         ?></td>
         					 <td><?php  printf("%d",$obj[$i+3]); ?></td>
         				
         					 <td><a href='rollno_midterm.php?id=<?=$i?>'>Mid Term</a></td> 
         					 <td><a href='rollno_fa.php?id=<?=$i?>'>Faculty Assessment</a></td> 
                   <?php if($row['Practical'] == 1) { ?>             <!-- if a practical part then show practical column else
                    not-->
                   <td><a href='rollno_practical.php?id=<?=$i?>'>Practical</a></td>
                   <?php 
                 } ?>
         					 <td><a href='rollno_grades.php?id=<?=$i?>'>Grades</a></td>
                   <td><a href='display.php?id=<?=$i?>'>Show Total</a></td>  

			</tr> 
				</table>
    <?php
}
    //$_SESSION['Code'] = $obj[$i+2];
    //$_SESSION['Sem'] = $obj[$i+3];
	$i+=5;
 }

}

mysqli_free_result($result);
**/


       $query = "SELECT * FROM `faculty1` WHERE  Name = '$name'";
        $result = mysqli_query($con,$query);
         while($row = mysqli_fetch_assoc($result))
         {    $i =  $row['serialno'];
               $code = $row['SubCode'];
               $query1 = "SELECT * FROM `papers` WHERE Code = '$code' ";
                $result1 = mysqli_query($con,$query1);
                  $row1 = mysqli_fetch_assoc($result1);
        
           ?> <table  style=" position:relative; left:50px; width:80%; margin-top:50px; text-align:center;">
           <tr style="background-color:green;">
                  <th style="font:50px;">Subject Code</th>
                  <th>Subject Name </th>
                  <th>Department</th>
                  <th>Semester</th>
                  <th>Roll No</th>
                  <th>Mid term Marks</th>
                  <th>Faculty Assessment</th>
                  
                 <?php  if($row1['P'] != 0) { ?>
                       <th>Practical Marks</th>
                       <?php } ?>
                  <th>Enter Grades</th>
                  <th>Internal Marks Evaluation</th>
                  <th>External Marks</th>
          </tr>
  
           <tr>
            <td><?php printf("%s ", $row['SubCode']); ?></td>
            <td><?php printf("%s ", $row['SubName']); ?></td>
            <td><?php printf("%s ", $row['Branch']); ?></td>
            <td><?php printf("%s ", $row['Sem']); ?></td>
            <td><?php printf("%s To %s ", $row['RangeStart'],$row['RangeEnd']); ?></td>
             <td><a href='rollno_midterm.php?id=<?=$i?>'>Mid Term</a></td>
            <td><a href='rollno_fa.php?id=<?=$i?>'>Faculty Assessment</a></td> 
                   <?php if($row1['P'] != 0) { ?>             <!-- if a practical part then show practical column else
                    not-->
            <td><a href='rollno_practical.php?id=<?=$i?>'>Practical</a></td>
                   <?php 
                 } ?>
           <td><a href='rollno_grades.php?id=<?=$i?>'>Grades</a></td>
           <td><a href='display.php?id=<?=$i?>'>Internal Evaluation</a></td>  
           <td><a href='rollno_external.php?id=<?=$i?>'>External</a></td>  

           </tr>
         </table>
         <?php 
         }


    ?>


<!-- <footer>
<div id="last" >
	<h2 style="color: white">Copyright of IGDTUW</h2>
</div>
<div id ="blc">
	<h2>IGDTUW-EXAMINATION DIVISION</h2>
</div>
</footer> -->
</body>
</html>