<?php include ('ConnectionR.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="js/bootstrap.min.js" rel="stylesheet">
    <script src="gen_validatorv4.js" type="text/javascript"></script>

    <link rel="stylesheet" type="text/css" href="style3.css">
    <link rel="stylesheet" type="text/css" href="design.css">
    <style>
        /* Hide all steps by default: */
        .tab {
            display: none;
        }
        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #ffdddd;
        }

        button {
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 17px;
            font-family: Raleway;
            cursor: pointer;
        }

            button:hover {
                opacity: 0.8;
            }

        #prevBtn {
            background-color: #bbbbbb;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

            .step.active {
                opacity: 1;
            }

            /* Mark the steps that are finished and valid: */
            .step.finish {
                background-color: #4CAF50;
            }
    </style>
    
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="http://igdtuw.ac.in" data-tooltip="tooltip" title="Go to IGDTUW Website!">IGDTUW</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </div>
    </nav>
    <div class="jumbotron">
        <h1 align="center">Student Registration Portal</h1>
        <p align="center">Indira Gandhi Delhi Technical University for Women.</p>
    </div>
    <ul class="nav nav-tabs nav-justified">
        <li><a href="registeration1.html">Instructions</a></li>
        <li><a href="verificationpge.html">Verification</a></li>
        <li class="active"><a data-toggle="tab" href="#">Registration</a></li>
    </ul>
    <br>
    <h3 align="center">Registration Form</h3>
	<?php include('errors.php'); ?>
    <p align="center" style="color: red;">**Please input the details carefully and correctly.**</p>
    <br />
    <br />
    <form name="myform" align="center" class="form-horizontal" role="form" id="regForm" action="registeration2.php" method="post" enctype="multipart/form-data">
        <div class="tab">
            <div class="form-group">
                <label class="col-sm-4 control-label">Enrollment Number</label>
                <div class="col-sm-4">
                    <input class="form-control" id="focusedInput" type="text" name="enrollment_no" required autocomplete="off">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-4 control-label"> Student Name</label><br>
                <div class="col-sm-4">
                    <input class="form-control" id="focusedInput" type="text" name="name" required="required" autocomplete="off">
                    <p style="color: red;">*Please enter your full name.</p>

                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label"> Course</label><br>
                <div class="col-sm-4">
                    <select class="form-control" id="focusedInput" name="course_branch" required="required">
                        <option value="">Please select from below</option>
                        <option value="B.Tech IT">B.Tech IT</option>
                        <option value="B.Tech CSE">B.Tech CSE</option>
                        <option value="B.Tech ECE">B.Tech ECE</option>
                        <option value="B.Tech MAE">B.Tech MAE</option>
                        <option value="B.Arch">B.Arch</option>
                        <option value="BBA">BBA</option>
                        <option value="M.Tech IT">M.Tech IT(Information Security Management)</option>
                        <option value="M.Tech CSE">M.Tech CSE(Artificial Intelligence)</option>
                        <option value="M.Tech MAE">M.Tech MAE(Robotics and Automation)</option>
                        <option value="M.Tech ECE">M.Tech ECE(VLSI Design)</option>
                        <option value="MCA">Master of Computer Application(MCA)</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Semester</label><br>
                <div class="col-sm-4">
                    <input class="form-control" id="focusedInput" type="number" name="sem" required="required" min="1" max="2">

                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label"> Father's Name</label><br>
                <div class="col-sm-4">
                    <input class="form-control" id="focusedInput" type="text" name="Father_Name" maxlength="30" required="required" autocomplete="off">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-4 control-label"> Mother's Name</label><br>
                <div class="col-sm-4">
                    <input class="form-control" id="focusedInput" type="text" name="Mother_Name" maxlength="30" required="required" autocomplete="off">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label"> Date of birth</label>
                <div class="col-sm-4">
                    <input class="form-control" id="focusedInput" type="date" min="1975-01-01" max="2040-12-31" name="dob" required="" autocomplete="off">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label"> Address Line 1</label>
                <div class="col-sm-4">
                    <textarea name="Address" rows="4" cols="30" autocomplete="off" required></textarea>
                </div>
            </div>


            <div class="form-group">
                <label class="col-sm-4 control-label"> City</label>
                <div class="col-sm-4">
                    <input class="form-control" id="focusedInput" type="text" name="City" maxlength="30" autocomplete="off">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">State</label>
                <div class="col-sm-4">
                    <input class="form-control" id="focusedInput" type="text" name="state" maxlength="30" autocomplete="off">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">District</label>
                <div class="col-sm-4">
                    <input class="form-control" id="focusedInput" type="text" name="distt" maxlength="30" autocomplete="off">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label"> Pin Code</label>
                <div class="col-sm-4">
                    <input class="form-control" id="focusedInput" type="text" pattern="^[1-9][0-9][0-9][0-9][0-9][0-9]$" name="Pin_Code" autocomplete="off">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label"> Contact Number</label>
                <div class="col-sm-4">
                    <input class="form-control" id="focusedInput" type="tel" name="contact" pattern="^\d{10}$" required="required" autocomplete="off">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label"> Alternate Contact Number</label>
                <div class="col-sm-4">
                    <input class="form-control" id="focusedInput" type="tel" name="alt_cont" pattern="^\d{10}$" required="required" autocomplete="off">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label"> Percentage In 10th</label>
                <div class="col-sm-4">
                    <input class="form-control" id="focusedInput" type="text" name="tenth" maxlength="30" required="required" autocomplete="off">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label"> Percentage In 12th</label>
                <div class="col-sm-4">
                    <input class="form-control" id="focusedInput" type="text" name="twelvth" maxlength="30" required="required" autocomplete="off">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label"> Passing year of 12th</label>
                <div class="col-sm-4">
                    <input class="form-control" id="focusedInput" type="text" name="passyear" maxlength="30" required="required" autocomplete="off">
                </div>
            </div>


            <div class="form-group">
                <label class="col-sm-4 control-label"> Email</label>
                <div class="col-sm-4">
                    <input class="form-control" id="focusedInput" type="email" name="email" required="required" autocomplete="off">
                    <p align="center" style="color: red;">Please enter the email correctly as the Login Details will be sent on the registered email id only.</p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label"> Password</label><br>
                <div class="col-sm-4">
                    <input class="form-control" id="pass" type="password" name="Password" maxlength="30" required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label"> Confirm Password</label><br>
                <div class="col-sm-4">
                    <input class="form-control" id="cpass" type="password" name="confirmPassword" maxlength="30" required="required" onChange="checkPasswordMatch();">
                </div>
            </div>
            <div class="registrationFormAlert" id="divCheckPasswordMatch" style="color:red;"></div>
            <div class="form-group">
                <label class="col-sm-4 control-label"> Security Question</label><br>
                <div class="col-sm-4">
                    <select class="form-control" id="focusedInput" name="security_question" required="required">
                        <option value="">Select Any</option>
		<option value="1">what is your pet name?</option>
		<option value="2">what is your favourite book?</option>
		<option value="3">what is your favourite movie?</option>
		<option value="4">what is your mother name?</option>
		<option value="5">what is your best friend name?</option>
		<option value="6">what is your subject?</option>
		<option value="7">what is your favourite colour?</option>
		<option value="8">what is your favourite hobby?</option>
		<option value="9">what is your favourite game?</option>
		<option value="10">what is your favourite actor name?</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Security Answer</label>
                <div class="col-sm-4">
                    <input class="form-control" id="focusedInput" type="text" name="security_ans" maxlength="30" autocomplete="off">
                </div>
            </div>

            <script type="text/javascript">
                $(document).on('click', '.dropdown-menu li a', function () {
                    $('#student_branch').val($(this).html());
                });
            </script>
        </div>
        <div class="tab">
            <div class="form-group">
                <label class="col-sm-4 control-label">Upload Photo</label>
                <div class="col-sm-4">
                    <input type="file" name="pic" required class="form-control" accept=".png,.jpeg,.jpg">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Upload Signature</label>
                <div class="col-sm-4">
                    <input class="form-control" type="file" name="sign" accept=".png,.jpeg,.jpg" required="required">
                </div>
            </div>

        </div>
        <div style="overflow:auto;" >
            <div style="float:right;margin-right:20%" class="btn btn-success btn-md">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
        </div>
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
        </div>
        <button type="reset" name="reset" class="btn btn-success btn-md" style="float:right;font-size:20px;margin:2%;margin-top:-5%">Reset</button>
    </form>

    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
				document.getElementById('nextBtn').type= "submit";
				document.getElementById('nextBtn').name = "submit";
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
			var _validFileExtensions = [".jpg", ".jpeg", ".gif", ".png"];  
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "" || !y[i].checkValidity()) {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
				else if(y[i].type == "file"){
					var sFileName = y[i].value;
					var blnValid = false;
					for (var j = 0; j < _validFileExtensions.length; j++) {
						var sCurExtension = _validFileExtensions[j];
						if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
							blnValid = true;
							break;
						}
					}
                
					if (!blnValid) {
						alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _validFileExtensions.join(", "));
						y[i].className += " invalid";
						return false;
					}
				}
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }

        function checkPasswordMatch() {

            var password = $("#pass").val();
            var confirmPassword = $("#cpass").val();
            var pass = document.getElementById("cpass");
            pass.valid = true;
            if (password != confirmPassword) {
                $("#divCheckPasswordMatch").html("Passwords do not match!");
                pass.valid = false;
            }
            else
                $("#divCheckPasswordMatch").html("");
        }
        $(document).ready(function () {
            $("#cpass").keyup(checkPasswordMatch);
        });
    </script>
</body>
</html>
