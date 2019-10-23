<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
{
  box-sizing: border-box;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
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
<div style="background-color:green; height:20px;">
	</div>

<h2>Fill in the details</h2>

<div class="container">
  <form>
    <div class="row">
      <div class="col-25">
        <label for="department">Department</label>
      </div>
      <div class="col-75">
<select id="country" name="department">	 
	 <option value="CSE">Computer Science Engineering</option>
    <option value="IT">Information Technology </option>
    <option value="ECE">Electrical Engineering</option>
    <option value="MAE">Mechanical Engineering</option>
  </select>
        </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="semester">Semester</label>
      </div>
      <div class="col-75">
   <select id="country" name="Semester">
    <option value="one">1</option>
    <option value="two">2 </option>
    <option value="three">3</option>
    <option value="four">4</option>
  </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subjectcode">Subject Code</label>
      </div>
      <div class="col-75">
        <select id="coun" name="SubjectCode" onchange="getText(this);">
          <option value="BAS101">BAS101 </option>
          <option value="BAS103">BAS103 </option>
          <option value="BAS105">BAS105 </option>
		  <option value="BAS107">BAS107 </option>
          <option value="BAS109">BAS109 </option>
		  <option value="BAS111">BAS111 </option>
          <option value="BAS113">BAS113 </option>
		  <option value="BAS115">BAS115 </option>
          <option value="BAS117">BAS117 </option>
        </select>
		<!--<div id="textDiv">
		</div>-->
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subjectname">Subject</label>
      </div>
      <div class="col-75">
        <textarea id="textDiv" style="height:20px" readonly></textarea>
      </div>
    </div>
	
    <div >
	<center>
      <input type="submit" value="Submit">
    </center>
	</div>
  </form>
</div>
<script type="text/javascript">

	var sem1=new Array()
	sem1[0]="Applied Mathematics-I"
	sem1[1]="Applied Physics"
	sem1[2]="Applied Chemistry"
	sem1[3]="Elements of Mechanical Engineering"
	sem1[4]="Introduction to Computers and Programming"
	sem1[5]="Communication Skills-I"
	sem1[6]="Applied Physics Lab-I"
	sem1[7]="Applied Chemistry Lab"
	sem1[8]="Computers and Programming Lab"
	var sem2=new Array()
	sem2[0]="Applied Mathematics-II"
	sem2[1]="Applied Physics-II"
	sem2[2]="Environmental Sciences"
	sem2[3]="Electrical Science"
	sem2[4]="Engineering Mechanics"
	sem2[5]="Comummnication Skills-II"
	sem2[6]="Applied Physics-II"
	sem2[7]="Environmental Science Lab"
	sem2[8]="Electrical Science Lab"
	sem2[9]="Engineering Mechanics Lab"
	sem2[10]="Engineering Graphics Lab"
function getText(slction)
{
   txtselected=slction.selectedIndex;
   document.getElementById('textDiv').innerHTML = sem1[txtselected];
}		
</script>
</body>
</html>
