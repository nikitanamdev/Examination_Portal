<?php include('select.php'); ?>
<!DOCTYPE html>
<html lan="en">
<head>
    <title>paper registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style5.css" />
	<script src="includes/jquery-1.6.2.js" type="text/javascript"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script>

	var ind = 0;
    $(document).ready(function(){
        $("#add").click(function(){
		ind =ind +1;
            $("#new").append(`<table cellpadding=25px id="`+ind+`">
			<tr><td>Course <select class='form-control' name='select1` + ind +  `' id="select1` + ind + `" required>
			<option value=''>Please select from below</option>
			<option value='B.Tech IT'>B.Tech IT</option>
			<option value='B.Tech CSE'>B.Tech CSE</option>
			<option value='B.Tech ECE'>B.Tech ECE</option>
			<option value='B.Tech MAE'>B.Tech MAE</option>
			<option value='B.Arch'>B.Arch</option>
			<option value='BBA'>BBA</option>
			<option value='M.Tech IT'>M.Tech IT(Information Security Management)</option
			<option value='M.Tech CSE'>M.Tech CSE(Artificial Intelligence)</option>
			<option value='M.Tech MAE'>M.Tech MAE(Robotics and Automation)</option>
			<option value='M.Tech ECE'>M.Tech ECE(VLSI Design)</option>
			<option value='MCA'>Master of Computer Application(MCA)</option></select></td>

			<td>Semester <select class='form-control' name='select3` + ind +  `' id="select3` + ind + `" required>
			<option value='1' selected>1</option>
			<option value='2'>2</option></select></td>

			<td>Subject <select class='form-control' name='select2` + ind +  `' id="select2` + ind + `" required>
			<option value=''>Please select from below</option>
			<option name='M.Tech IT 1' value='MIS-101'>MIS-101 Advanced Programming</option>
			<option name='M.Tech IT 1' value='MIS-103'>MIS-103 Advanced Data Structure and Algorithms</option>
			<option name='M.Tech IT 1' value='MIS-105'>MIS-105 Advances in Machine Learning</option>
			<option name='M.Tech IT 1' value='MIS-107'>MIS-107 Fundamentals of Information Security</option>
			<option name='M.Tech IT 1' value='GEC_101'>GEC-101 Generic Open Elective</option>
			<option name='M.Tech IT 1' value='ROC-101'>ROC-101 Research Methodology</option>
			<option name='M.Tech CSE 1' value='MCS-101'>MCS-101 Problem Solving Through AI</option>
			<option name='M.Tech CSE 1' value='MCS-103'>MCS-103 Soft Computing</option>
			<option name='M.Tech CSE 1' value='MCS-105'>MCS-105 Intelligent Data and Information Retrieval</option>
			<option name='M.Tech CSE 1' value='MCS-107'>MCS-107 Data Structures and Algorithm Analysis</option>
			<option name='M.Tech CSE 1' value='GEC_101'>GEC-101 Generic Open Elective</option>
			<option name='M.Tech CSE 1' value='ROC-101'>ROC-101 Research Methodology</option>
			<option name='M.Tech ECE 1' value='MVD-101'>MVD-101 CMOS Analog Circuit Design</option>
			<option name='M.Tech ECE 1' value='MVD-103'>MVD-103 Semiconductor Devices for Digital Integrated Circuits</option>
			<option name='M.Tech ECE 1' value='MVD-105'>MVD-105 Hardware Description Languages</option>
			<option name='M.Tech ECE 1' value='MVD-107'>MVD-107 Advanced IC Processing</option>
			<option name='M.Tech ECE 1' value='GEC_101'>GEC-101 Generic Open Elective</option>
			<option name='M.Tech ECE 1' value='ROC-101'>ROC-101 Research Methodology</option>
			<option name='M.Tech MAE 1' value='MRA-101'>MRA-101 Robotics Engineering</option>
			<option name='M.Tech MAE 1' value='MRA-103'>MRA-103 Mechatronics Systems and Applications</option>
			<option name='M.Tech MAE 1' value='MRA-105'>MRA-105 Computer Aided Modeling and Analysis</option>
			<option name='M.Tech MAE 1' value='MRA-107'>MRA-107 Automation in Manufacturing</option>
			<option name='M.Tech MAE 1' value='GEC_101'>GEC-101 Generic Open Elective</option>
			<option name='M.Tech MAE 1' value='ROC-101'>ROC-101 Research Methodology</option>
			<option name='M.Tech CSE 2' value='MIS-102'>MIS-102 Machine Learning</option>
			<option name='M.Tech CSE 2' value='MCS-104'>MCS-104 IoT and its Applications in AI</option>
			<option name='M.Tech CSE 2' value='MCS-106'>MCS-106 Social Network Analysis</option>
			<option name='M.Tech CSE 2' value='MCS-108'>MCS-108 Introduction to Cognitive Science</option>
			<option name='M.Tech CSE 2' value='MCS-110'>MCS-110 AI Based Programming Tools</option>
			<option name='M.Tech CSE 2' value='ROC-102'>ROC-102 Research Ethics</option>
			<option name='M.Tech CSE 2' value='MCS-112'>MCS-112 Knowledge Engineering</option>
			<option name='M.Tech CSE 2' value='MCS-114'>MCS-114 Cloud Computing</option>
			<option name='M.Tech CSE 2' value='MCS-116'>MCS-116 Big Data Analysis</option>
			<option name='M.Tech CSE 2' value='MCS-118'>MCS-118 Parallel Algorithms</option>
			<option name='M.Tech CSE 2' value='MCS-120'>MCS-120 Knowledge Based System Design</option>
			<option name='M.Tech CSE 2' value='MIS-112'>MIS-112 Computer Vision</option>
			<option name='M.Tech IT 2' value='MIS-102'>MIS-102 Secure Coding and Security Engineering</option>
			<option name='M.Tech IT 2' value='MIS-104'>MIS-104 Applied Cryptography</option>
			<option name='M.Tech IT 2' value='MIS-106'>MIS-106 Cyber Forensics</option>
			<option name='M.Tech IT 2' value='MIS-108'>MIS-508 Adv. Database Management Systems</option>
			<option name='M.Tech IT 2' value='MIS-510'>MIS-510 Introduction to Biometrics</option>
			<option name='M.Tech IT 2' value='MIS-512'>MIS-512 Wireless Networks</option>
			<option name='M.Tech IT 2' value='MIS-514'>MIS-514 Blockchain Fundamentals</option>
			<option name='M.Tech IT 2' value='MIS-518'>MIS-518 Soft Computing</option>
			<option name='M.Tech IT 2' value='MIS-520'>MIS-520 Semantic Web</option>
			<option name='M.Tech IT 2' value='MIS-522'>MIS-522 Security Testing and Risk Management</option>
			<option name='M.Tech IT 2' value='MIS-524'>MIS-524 Natural Language Processing and Information Retrieval</option>
			<option name='M.Tech IT 2' value='ROC-102'>ROC-102 Research Ethics</option>
			<option name='M.Tech ECE 2' value='MVD-102'>MVD-102 Device Modeling and Circuit Simulation</option>
			<option name='M.Tech ECE 2' value='MVD-104'>MVD-104 Digital System Design with FPGA</option>
			<option name='M.Tech ECE 2' value='MVD-106'>MVD-106 Analog Integrated Circuits</option>
			<option name='M.Tech ECE 2' value='MVD-108'>MVD-108 Semiconductor Memory Design</option>
			<option name='M.Tech ECE 2' value='MVD-110'>MVD-110 Digital VLSI Design</option>
			<option name='M.Tech ECE 2' value='ROC-102'>ROC-102 Research Ethics</option>
			<option name='M.Tech ECE 2' value='MVD-112'>MVD-112 Analog Filter Design</option>
			<option name='M.Tech ECE 2' value='MVD-114'>MVD-114 Digital Techniques for High Speed Design</option>
			<option name='M.Tech ECE 2' value='MVD-116'>MVD-116 CMOS Mixed-Signal VLSI Design</option>
			<option name='M.Tech ECE 2' value='MVD-118'>MVD-118 Advanced Embedded System Design</option>
			<option name='M.Tech ECE 2' value='MVD-120'>MVD-120 Deep Submicron CMOS ICs</option>
			<option name='M.Tech ECE 2' value='MVD-122'>MVD-122 Digital System Design using Verilog</option>
			<option name='M.Tech ECE 2' value='MVD-124'>MVD-124 MEMS & Microsystems</option>
			<option name='M.Tech ECE 2' value='MVD-126'>MVD-126 Internet of Things</option>
			<option name='M.Tech MAE 2' value='MRA-102'>MRA-102 Pneumatic and Hydraulic Controls</option>
			<option name='M.Tech MAE 2' value='MRA-104'>MRA-104 Computer Integrated Manufacturing</option>
			<option name='M.Tech MAE 2' value='MRA-106'>MRA-106 Microcontroller & Applications</option>
			<option name='M.Tech MAE 2' value='MRA-108'>MRA-108 Modern Control Theory</option>
			<option name='M.Tech MAE 2' value='MRA-110'>MRA-110 MEMS and MicroSystems</option>
			<option name='M.Tech MAE 2' value='MRA-112'>MRA-112 Artificial Intelligence</option>
			<option name='M.Tech MAE 2' value='MRA-114'>MRA-114 Instrumentation and Control Engineering</option>
			<option name='M.Tech MAE 2' value='MRA-116'>MRA-116 Numeric Methods</option>
			<option name='M.Tech MAE 2' value='MRA-118'>MRA-118 Advanced Digital Signal Processing</option>
			<option name='M.Tech MAE 2' value='MRA-120'>MRA-120 Advanced Finite Element Methods</option>
			<option name='M.Tech MAE 2' value='MRA-122'>MRA-122 Neural Network and Fuzzy Logic</option>
			<option name='M.Tech MAE 2' value='MRA-124'>MRA-124 Optimization for Engineering</option>
			<option name='M.Tech MAE 2' value='MRA-126'>MRA-126 Modelling & Simulation</option>
			<option name='M.Tech MAE 2' value='ROC-102'>ROC-102 Research Ethics</option>
			<option name='MCA 1' value='MCA-101'>MCA-101 Fundamentals of Information Technology</option>
			<option name='MCA 1' value='MCA-103'>MCA-103 Problem Solving using C Programming</option>
			<option name='MCA 1' value='MCA-105'>MCA-105 Discrete Mathematics</option>
			<option name='MCA 1' value='MCA-107'>MCA-107 Computer Organization</option>
			<option name='MCA 1' value='HMC-101'>HMC-101 Professional Skills</option>
			<option name='MCA 2' value='MCA-102'>MCA-102 Data Structures</option>
			<option name='MCA 2' value='MCA-104'>MCA-104 Object Oriented Programming in C++</option>
			<option name='MCA 2' value='MCA-106'>MCA-106 Software Engineering</option>
			<option name='MCA 2' value='MCA-108'>MCA-108 Operating Systems</option>
			<option name='MCA 2' value='HMC-102'>HMC-102 Human Values and Professional Ethics</option>
			<option name='BBA 1' value='BMS-101'>BMS-101 Principles of Management</option>
			<option name='BBA 1' value='BMS-103'>BMS-103 Financial Accounting</option>
			<option name='BBA 1' value='BMS-105'>BMS-105 Micro Economics</option>
			<option name='BBA 1' value='AMC-101'>AMC-101 Business Mathematics</option>
			<option name='BBA 1' value='AMC-103'>AMC-103 Business Communication - I</option>
			<option name='BBA 1' value='AMC-105'>AMC-105Computer Applications in Management</option>
			<option name='BBA 1' value='AMC-107'>AMC-107 Environmental Management</option>
			<option name='BBA 2' value='BMS-102'>BMS-102 Organizational Behavior</option>
			<option name='BBA 2' value='BMS-104'>BMS-104 Business Environment</option>
			<option name='BBA 2' value='BMS-106'>BMS-106 Macro Economics</option>
			<option name='BBA 2' value='BMS-108'>BMS-108 Marketing Management</option>
			<option name='BBA 2' value='BMS-112'>BMS-112 Management Accounting</option>
			<option name='BBA 2' value='AMC-102'>AMC-102 Business Statistics</option>
			<option name='BBA 2' value='AMC-104'>AMC-104 Business Communication - II</option>
			<option name='B.Arch 1' value='BAP-101'>BAP-101 Introduction to Architectural Design - I</option>
			<option name='B.Arch 1' value='BAP-103'>BAP-103 Building Materials and Construction Technology -I</option>
			<option name='B.Arch 1' value='BAP-105'>BAP-105 Architectural Drawing - I</option>
			<option name='B.Arch 1' value='BAP-107'>BAP-107 Architectural Graphics - I</option>
			<option name='B.Arch 1' value='BAP-109'>BAP-109 History of Architecture - I</option>
			<option name='B.Arch 1' value='BAP-111'>BAP-111 Structures - I</option>
			<option name='B.Arch 1' value='BAP-113'>BAP-113 Climatology and Environmental Studies - I</option>
			<option name='B.Arch 1' value='BAP-115'>BAP-115 Architectural Workshop - I</option>
			<option name='B.Arch 1' value='BAP-117'>BAP-117 Mathematics in Architecture</option>
			<option name='B.Arch 2' value='BAP-102'>BAP-102 Architectural Design - II</option>
			<option name='B.Arch 2' value='BAP-104'>BAP-104 Building Materials and Construction Technology - II</option>
			<option name='B.Arch 2' value='BAP-106'>BAP-106 Architectural Drawing - II</option>
			<option name='B.Arch 2' value='BAP-108'>BAP-108 Architectural Graphics - II</option>
			<option name='B.Arch 2' value='BAP-110'>BAP-110 History of Architecture - II</option>
			<option name='B.Arch 2' value='BAP-112'>BAP-112 Structures - II</option>
			<option name='B.Arch 2' value='BAP-114'>BAP-114 Climatology and Environmental Studies - II</option>
			<option name='B.Arch 2' value='BCS-101'>BCS-101 Introduction to Computers and Programming in C Language</option>
			<option name='B.Tech IT 1' value='BAS-101'>BAS-101 Applied Mathematics-I</option>
			<option name='B.Tech IT 1' value='BAS-103'>BAS-103 Applied Physics-I</option>
			<option name='B.Tech IT 1' value='BAS-105'>BAS-105 Applied Chemistry</option>
			<option name='B.Tech IT 1' value='BMA-110'>BMA-110 Engineering Mechanics</option>
			<option name='B.Tech IT 1' value='BEC-110'>BEC-110 Basic Electrical Engineering</option>
			<option name='B.Tech IT 1' value='BMA-120'>BMA-120 Workshop Practice</option>
			<option name='B.Tech IT 1' value='BMA-130'>BMA-130 Engineering Graphics Lab</option>
			<option name='B.Tech IT 1' value='HMC-110'>HMC-110 Humanities and Social Science</option>
			<option name='B.Tech IT 1' value='BCS-110'>BCS-110 Programming in C Language</option>
			<option name='B.Tech CSE 1' value='BAS-101'>BAS-101 Applied Mathematics-I</option>
			<option name='B.Tech CSE 1' value='BAS-103'>BAS-103 Applied Physics-I</option>
			<option name='B.Tech CSE 1' value='BAS-105'>BAS-105 Applied Chemistry</option>
			<option name='B.Tech CSE 1' value='BMA-110'>BMA-110 Engineering Mechanics</option>
			<option name='B.Tech CSE 1' value='BEC-110'>BEC-110 Basic Electrical Engineering</option>
			<option name='B.Tech CSE 1' value='BMA-120'>BMA-120 Workshop Practice</option>
			<option name='B.Tech CSE 1' value='BMA-130'>BMA-130 Engineering Graphics Lab</option>
			<option name='B.Tech CSE 1' value='HMC-110'>HMC-110 Humanities and Social Science</option>
			<option name='B.Tech CSE 1' value='BCS-110'>BCS-110 Programming in C Language</option>
			<option name='B.Tech ECE 1' value='BAS-101'>BAS-101 Applied Mathematics-I</option>
			<option name='B.Tech ECE 1' value='BAS-103'>BAS-103 Applied Physics-I</option>
			<option name='B.Tech ECE 1' value='BAS-105'>BAS-105 Applied Chemistry</option>
			<option name='B.Tech ECE 1' value='BMA-110'>BMA-110 Engineering Mechanics</option>
			<option name='B.Tech ECE 1' value='BEC-110'>BEC-110 Basic Electrical Engineering</option>
			<option name='B.Tech ECE 1' value='BMA-120'>BMA-120 Workshop Practice</option>
			<option name='B.Tech ECE 1' value='BMA-130'>BMA-130 Engineering Graphics Lab</option>
			<option name='B.Tech ECE 1' value='HMC-110'>HMC-110 Humanities and Social Science</option>
			<option name='B.Tech ECE 1' value='BCS-110'>BCS-110 Programming in C Language</option>
			<option name='B.Tech MAE 1' value='BAS-101'>BAS-101 Applied Mathematics-I</option>
			<option name='B.Tech MAE 1' value='BAS-103'>BAS-103 Applied Physics-I</option>
			<option name='B.Tech MAE 1' value='BAS-105'>BAS-105 Applied Chemistry</option>
			<option name='B.Tech MAE 1' value='BMA-110'>BMA-110 Engineering Mechanics</option>
			<option name='B.Tech MAE 1' value='BEC-110'>BEC-110 Basic Electrical Engineering</option>
			<option name='B.Tech MAE 1' value='BMA-120'>BMA-120 Workshop Practice</option>
			<option name='B.Tech MAE 1' value='BMA-130'>BMA-130 Engineering Graphics Lab</option>
			<option name='B.Tech MAE 1' value='HMC-110'>HMC-110 Humanities and Social Science</option>
			<option name='B.Tech MAE 1' value='BCS-110'>BCS-110 Programming in C Language</option>
			<option name='B.Tech CSE 2' value='BAS-102'>BAS-102 Applied Mathematics-II</option>
			<option name='B.Tech CSE 2' value='BAS-104'>BAS-104 Applied Physics-II</option>
			<option name='B.Tech CSE 2' value='BAS-106'>BAS-106 Environmental Science</option>
			<option name='B.Tech CSE 2' value='BMA-110'>BMA-110 Engineering Mechanics</option>
			<option name='B.Tech CSE 2' value='BEC-110'>BEC-110 Basic Electrical Engineering</option>
			<option name='B.Tech CSE 2' value='BMA-120'>BMA-120 Workshop Practice</option>
			<option name='B.Tech CSE 2' value='BMA-130'>BMA-130 Engineering Graphics Lab</option>
			<option name='B.Tech CSE 2' value='HMC-110'>HMC-110 Humanities and Social Science</option>
			<option name='B.Tech CSE 2' value='BCS-110'>BCS-110 Programming in C Language</option>
			<option name='B.Tech IT 2' value='BAS-102'>BAS-102 Applied Mathematics-II</option>
			<option name='B.Tech IT 2' value='BAS-104'>BAS-104 Applied Physics-II</option>
			<option name='B.Tech IT 2' value='BAS-106'>BAS-106 Environmental Science</option>
			<option name='B.Tech IT 2' value='BMA-110'>BMA-110 Engineering Mechanics</option>
			<option name='B.Tech IT 2' value='BEC-110'>BEC-110 Basic Electrical Engineering</option>
			<option name='B.Tech IT 2' value='BMA-120'>BMA-120 Workshop Practice</option>
			<option name='B.Tech IT 2' value='BMA-130'>BMA-130 Engineering Graphics Lab</option>
			<option name='B.Tech IT 2' value='HMC-110'>HMC-110 Humanities and Social Science</option>
			<option name='B.Tech IT 2' value='BCS-110'>BCS-110 Programming in C Language</option>
			<option name='B.Tech ECE 2' value='BAS-102'>BAS-102 Applied Mathematics-II</option>
			<option name='B.Tech ECE 2' value='BAS-104'>BAS-104 Applied Physics-II</option>
			<option name='B.Tech ECE 2' value='BAS-106'>BAS-106 Environmental Science</option>
			<option name='B.Tech ECE 2' value='BMA-110'>BMA-110 Engineering Mechanics</option>
			<option name='B.Tech ECE 2' value='BEC-110'>BEC-110 Basic Electrical Engineering</option>
			<option name='B.Tech ECE 2' value='BMA-120'>BMA-120 Workshop Practice</option>
			<option name='B.Tech ECE 2' value='BMA-130'>BMA-130 Engineering Graphics Lab</option>
			<option name='B.Tech ECE 2' value='HMC-110'>HMC-110 Humanities and Social Science</option>
			<option name='B.Tech ECE 2' value='BCS-110'>BCS-110 Programming in C Language</option>
			<option name='B.Tech MAE 2' value='BAS-102'>BAS-102 Applied Mathematics-II</option>
			<option name='B.Tech MAE 2' value='BAS-104'>BAS-104 Applied Physics-II</option>
			<option name='B.Tech MAE 2' value='BAS-106'>BAS-106 Environmental Science</option>
			<option name='B.Tech MAE 2' value='BMA-110'>BMA-110 Engineering Mechanics</option>
			<option name='B.Tech MAE 2' value='BEC-110'>BEC-110 Basic Electrical Engineering</option>
			<option name='B.Tech MAE 2' value='BMA-120'>BMA-120 Workshop Practice</option>
			<option name='B.Tech MAE 2' value='BMA-130'>BMA-130 Engineering Graphics Lab</option>
			<option name='B.Tech MAE 2' value='HMC-110'>HMC-110 Humanities and Social Science</option>
			<option name='B.Tech MAE 2' value='BCS-110'>BCS-110 Programming in C Language</option></select></td>
			
			<td id="range` +ind+`">Select Batch <select class='form-control' name='select4` + ind +  `' id="select4` + ind + `" required>
			<option value='Yes'>Yes</option>
			<option value='No' selected>No</option></td>

			<td><button id="bttn` + ind + `" type="button">Remove</button></td>
			</tr></table><br>`);
		$("#select1"+ind+"").change(function() {
		var curr = this.id.slice(-1);
		  if ($(this).data('options') === undefined) {
			/*Taking an array of all options-2 and kind of embedding it on the select1*/
			$(this).data('options', $('#select2' + curr + ' option').clone());
		  }
		  var id = $(this).val() + ' ' + $("#select3"+curr+"").val();
		  var options = $(this).data('options').filter('[name="' + id + '"]');
		  $("#select2"+curr+"").html(options);
		});
		$("#select3"+ind+"").change(function() {		
		var curr = this.id.slice(-1);
		  if ($("#select1"+curr+"").data('options') === undefined) {
			/*Taking an array of all options-2 and kind of embedding it on the select1*/
			$("#select1"+curr+"").data('options', $('#select2' + curr + ' option').clone());
		  }
		  var id = $("#select1"+curr+"").val() + ' ' + $("#select3"+curr+"").val();
		  var options = $("#select1"+curr+"").data('options').filter('[name="' + id + '"]');
		  $("#select2"+curr+"").html(options);
		});
		$("#select4"+ind+"").change(function() {		
		var curr = this.id.slice(-1);
			if ($(this).val() == 'Yes'){
				$("#range"+curr+"").append(`<br><div id= "rng`+ curr +`">
				From<input class="form-control" type="text" name="start`+curr+`" autocomplete="off"><br>
				To<input class="form-control"  type="text" name="end`+curr+`" autocomplete="off">
				</div>`);
			}else{
				$("#rng"+curr+"").remove();
			}
		});
		$("#id").val(ind);
		$("#bttn"+ind+"").click(function(){
		var curr = this.id.slice(-1);
			$("#"+curr+"").remove();
		});
		
     });
 });
	
</script>
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
            <li><a href="home.php">Home</a></li>
            <li><a href="selectPapers.php">Display Papers</a></li>
            <li><a href="papers.php">Upload Marks</a></li>
            <li><a href="#about">Results</a></li>
            <li><a href="#about">Notifications</a></li>
        </ul>
    </div>
    <br>
    <div id="navbar1">
        <ul>
            <li><a href="#enrollno.">Welcome <?php echo $user;?></a></li>
            <li><a href="changePassword.php">Change password</a></li>
            <li><a href="front.php?logout='1'">Log Out</a></li>

        </ul>
    </div>
	<?php include('errors.php'); ?>
 <div id="side" style="width=100%;margin-left:0%">
        <p style="margin-left: 10%;font-size: 30px">Paper Selection</p>
		
	
    <div id="paper">
	<table cellpadding=30px width=100%>
	
       <?php 
	   $query = "select * from faculty1 where Name='$user'";
	   $res = mysqli_query($db,$query);
	   $i =1;
	   while($rows = mysqli_fetch_assoc($res)){
	   if($i == 1){
	   	   ?>
		  <tr><td>Course</td><td>Semester</td><td>Subject</td><td>Batch</td></tr> 
		   <?php
		   $i =0;
	   }
	   	   ?>
		   <tr>
		   <td><?php echo $rows["Course"].' '.$rows["Branch"]?></td>
		   <td><?php echo $rows["Sem"]?></td>
		   <td><?php echo $rows["SubCode"].' '.$rows["SubName"]?></td>
		   <td><?php 
				if($rows["Grouping"]){
					echo "Yes";
					echo nl2br("\nFrom".$rows["RangeStart"]);
					echo nl2br("\nTo".$rows["RangeEnd"]);
				}else{
					echo "No";
				}	   
		   ?></td>
		   </tr>
		   <?php
	   }

	   ?> 
	   </table>
	   <button id="add">Add new Paper</button>
    <p>Click the above button to add new paper.</p>
    </div>
	<form action="" method="POST" >
	<input type="hidden" id="id" name="id" value=""/>
	<div id="new">
	</div>
	<button type="submit" value="submit" name="set" class="sbmtbtn" style="background:green">Add papers</button>
	</form>
	
 </div>

  <div id="last">
        <h2 style="color: white">Copyright of IGDTUW</h2>
    </div>
    <div id="blc">
        <h2>IGDTUW-EXAMINATION DIVISION</h2>
    </div>
</body>
</html>