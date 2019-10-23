<!DOCTYPE html>
<html lan="en">
<head>
	<title>assessment portal</title>
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
<div  style="background-color: green; height:20px;">

	</div>

	<ul class="nav nav-tabs">
	
	<li class="active">
	<a data-toggle="tab" href="papers.php">Registered Papers</a>
	</li>
  <li style="float:right;"><a href="front.php?logout='1'">log out</a></li>
</ul>
<table style=" position:relative; left:50px; width:80%; margin-top:50px;">
  <tr style="background-color:green;">
    <th style="font:50px;">S.No.</th>
    <th>RollNo. </th>
    <th>Marks Obtainde(Out of 40)</th>
   <!--  <th>Grades Obtained</th> -->
   </tr>
   
    <?php  
         session_start();
         $con = mysqli_connect('localhost','root','','student');
        //mysqli_select_db($con,'assessmentportal');
        if($con === false) 
        {
        die("ERROR:Could not connect.".mysqli_connect_error());
        }
        
       $subid = $_GET['id'];

       if(isset($subid))
       {
              $name = $_SESSION['username']; 
            //getting code n sem from faculty db to access a particular db
            /**$sql =  "SELECT * FROM `Faculty` WHERE Name= '$name' ";  //getting all the data for the faculty registered
            $result = mysqli_query($con,$sql);
            $obj = mysqli_fetch_row($result);**/
          //getting the databse name
        $sql =  "SELECT * FROM `faculty1` WHERE  serialno = '$subid' ";
            $result = mysqli_query($con,$sql);
            $obj = mysqli_fetch_row($result);
                              if($obj[5] == 'CSE')
								    { if( $obj[9] <= '07001012019'){
					                   $code = '20'.'_';
						                }else{
					                      $code = '21'.'_';}
								    }
                                else if($obj[5] == 'IT')
                                { if( $obj[9] <= '07001012019'){
					                   $code = '22'.'_';
						                }else{
					                      $code = '23'.'_';}
								    }
                                else if($obj[5] == 'ECE')
                                 $code = '24'.'_';
                                else if($obj[5] == 'MECH')
                                 $code = '25'.'_';
            $sem = $obj[6].'_';
            $year = $obj[10];
        $subcode = $obj[2];
      
         $_SESSION['SubCode'] =$subcode;         //to be used to update in faculty colmn midterm 0/1
              $_SESSION['Branch'] =$obj[5];
              $_SESSION['Sem'] =$obj[6];
        $mysql_tb = $code.$sem.$year;
        $index = 1;  //for S.No.
      
      $query = "SELECT * FROM `".$mysql_tb."` WHERE serialno = '1' ";
        $result = mysqli_query($con,$query);
        $i = 2;
       while( $obj1 = mysqli_fetch_row($result))
       {     $fieldcount = mysqli_num_fields($result);

                while($i<$fieldcount - 4)
                  { if($obj1[$i] == $subcode)
                       break;
                      $i+=10;
                    }
       }
      
      //printing rollno.s
        $query = "SELECT rollno FROM `".$mysql_tb."` WHERE 1";
        $result = mysqli_query($con,$query);
        $totalstudents = mysqli_num_rows($result);
        $_SESSION['totalstudents'] = $totalstudents;
        
         while($row = mysqli_fetch_assoc($result))
                {   $query1 = "SELECT * FROM `papers` WHERE Code = '$subcode' "; //tp check for practical
                        $result1 = mysqli_query($con,$query1);
                         $row1 = mysqli_fetch_assoc($result1);

                         $index1 = (int)($i/10) + 1; //to add marks at internal
                         $colname = "Internal" . "$index1";

        
                  ?>
                     <tr  style="background-color:grey; text-align:center;" >
                       <td><?php printf("%d",$index++) ?></td>
                       <td><?php printf("%s ", $row['rollno']); ?> </td>  
                       <?php  $rollno = $row['rollno'];
                        $sql = "SELECT * FROM `".$mysql_tb."` WHERE rollno = $rollno ";
                         $result1 = mysqli_query($con,$sql);
                          $obj1 = mysqli_fetch_row($result1);
                               if($row1['P'] != 0) 
                               {
                                      $sum = $obj1[$i+3] + (int)(($obj1[$i+4])/2)+ (int)(($obj1[$i+5])/2);
                                      $res2 = "UPDATE `".$mysql_tb."` SET  ".$colname." = '".$sum."' WHERE rollno = $rollno";
                                     $result2 = mysqli_query($con,$res2);

                                 }
                               else
                                { $sum = $obj1[$i+3] + $obj1[$i+4];
                                  $res2 = "UPDATE `".$mysql_tb."` SET  ".$colname." = '".$sum."' WHERE rollno = $rollno";
                                     $result2 = mysqli_query($con,$res2);
                                     
                                } ?>
                        <td><?php printf("%d ", $sum); ?> </td> 
                        <!-- <td><?php printf("%s ", $obj1[$i+8]); ?> </td>  -->
                     </tr> 
                    <?php
                }
           }
   

       
                       
    ?> 
 </table>


<form  action="display_freeze.php" method="post">
  
     <button type="submit" class="btn-primary" style="width:10%;"> Freeze Result</button><!-- assign a name for the button -->
</form>





<!-- <footer>
<div id="last" >
  <h2 style="color: white">Copyright of IGDTUW</h2>
</div>
<div id ="blc">
  <h2>IGDTUW-EXAMINATION DIVISION</h2>
</div>
</footer>  -->
</body>
</html>