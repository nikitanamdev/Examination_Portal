<!DOCTYPE html>
<html lan="en">
<head>
	<title>assessment portal</title>
	<meta charset="utf-8">
	<!--<meta name ="viewport" content ="width-device-width,initial-scale=1">-->
	
	<link rel = "stylesheet" type = "text/css" href = "style1.css" />
	<style>

        
table, td, th {  
  border: 1px solid black;
  text-align: left;
}
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
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
	<li style="float:left;"><a href="home_s.php">Home</a></li>
	<li class="active" style="background-color:green;">
	<a data-toggle="tab" href="#home" style="color:white;">Result</a>
	</li>
	<li style="float:right;"><a href="front.php?logout='1'">LogOut</a></li>
</ul>
   <div>
   <table width="1065" align="center">
     <tr align="center">
	</tr>
	<center>
	<tr align="center" bgcolor="green" height="30px" >
		<th style="color:white;width:60px;text-align:center;">S.No</th>
		<th style="color:white;width:100px;text-align:center;" >Paper Code</th>
		<th style="color:white;width:300px;text-align:center;">Subject</th>
		<th style="color:white;width:100px;text-align:center;">Mid Term</th>
		<th style="color:white;width:100px;text-align:center;">Practical</th>
		<th style="color:white;width:100px;text-align:center;">Faculty assessment</th>
        <th style="color:white;width:100px;text-align:center;">Internal marks</th>
	</tr>
	</tr>
    </center>
<?php 

 session_start();
$con = mysqli_connect('localhost','root','','student');
//mysqli_select_db($con,'assessmentportal');
if($con === false) 
{
	die("ERROR:Could not connect.".mysqli_connect_error());
}
//$subid = $_GET['id'];
       //echo $subid;

       
          //$name = $_SESSION['Name']; 
            //getting code n sem from faculty db to access a particular db
            //$sql =  "SELECT * FROM `Faculty` WHERE Name= '$name' ";  //getting all the data for the faculty registered
           //getting the databse name
           //$code = $obj[$subid+2].'_';
          //$sem = $obj[$subid+3].'_';
          //$year = $obj[$subid+4];
		  $rollno = $_SESSION['username'];
		$sql =  "SELECT * FROM `register` WHERE  Enrollment_No = '$rollno' ";
            $result = mysqli_query($con,$sql);
            $obj = mysqli_fetch_row($result); 
                              if($obj[4] == 'CSE')
								    { if( $rollno <= '07001012019'){
					                   $code = '20'.'_';
						                }else{
					                      $code = '21'.'_';}
								    }
                                else if($obj[4] == 'IT')
                                { if( $rollno <= '07001012019'){
					                   $code = '22'.'_';
						                }else{
					                      $code = '23'.'_';}
								    }
                                else if($obj[4] == 'ECE')
                                 $code = '24'.'_';
                                else if($obj[4] == 'MECH')
                                 $code = '25'.'_';
            $sem = $obj[5].'_';
            $year = $obj[6];
           //$subcode = $obj[2];
        $mysql_tb = $code.$sem.$year;
		//$mysql_tb = $code.$sem.$year;
		echo $mysql_tb;
		$query = "SELECT * FROM `".$mysql_tb."` WHERE rollno = '$rollno' ";
        $result = mysqli_query($con,$query);

		$index = 1;  //for S.No.
		$i = 2; 
		
while($obj = mysqli_fetch_row($result))
{  
    $fieldcount = mysqli_num_fields($result);

      while($i < $fieldcount - 4)
	     {  //printf("%s \t %s \t %s ",$obj[$i],$obj[$i+1],$obj[$i+3]);   statemnt that prints the diif column values
      //echo '<br />';
            ?>  
                 <br>
		                 <tr>
                              <td><?php  printf("%d",$index++); ?></td>
                               <td><?php  printf("%s",$obj[$i]); ?></td>
                               <td><?php  printf("%s",$obj[$i+1]); ?></td>
							   <td><?php 
                 if($obj[$i+4] == 0)
                  printf("","");
                else
                  printf("%d",$obj[$i+4]);
                   ?></td>
								<td><?php  $code = $obj[$i];
                $query1 = "SELECT * FROM `papers` WHERE Code = '$code' ";
                       $result1 = mysqli_query($con,$query1);
                          $row1 = mysqli_fetch_assoc($result1);
                      if($row1['P'] == 0)
                       printf("%s",'N/A'); 
                     else if($obj[$i+5] == 0)
                      printf("","");
                    else
                      printf("%d",$obj[$i+5]); 
                     ?></td>
								<td><?php  if($obj[$i+3] == 0)
                  printf("","");
                else
                  printf("%d",$obj[$i+3]);?></td>
								<td><?php  if($obj[$i+7] == 0)
                  printf("","");
                else
                  printf("%d",$obj[$i+7]); ?></td>
								
                         </tr> 
                   
            <?php
	     $i+=10;
        }
}

mysqli_free_result($result);
    ?>
</table>
</div>
<!-- <footer>
<div id="last" >
  <h3 style="color: white">Copyright of IGDTUW</h3>
</div>
<div id ="blc">
  <h3>IGDTUW-EXAMINATION DIVISION</h3>
</div>
</footer> -->

</body>
</html>