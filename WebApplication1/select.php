<?php 
// connect to the database
session_start();
$db = mysqli_connect('localhost', 'root', '', 'student');
$user = $_SESSION['username'];
$errors = array();
if (isset($_POST['set'])) {
	$id = $_POST['id'];
	while($id > 0){
	if(isset($_POST["select1$id"])){
		$c_b = mysqli_real_escape_string($db, $_POST["select1$id"]);
		$arr = explode(" ", $c_b);
		$course = $arr[0];
		$branch = $arr[1];
		$subCode = mysqli_real_escape_string($db, $_POST["select2$id"]);
		$sem = mysqli_real_escape_string($db, $_POST["select3$id"]);
		$grp = mysqli_real_escape_string($db, $_POST["select4$id"]);
		$st = 'NULL';
		$end = 'NULL';
		if($grp=='Yes'){
		$grp = '1';
			$st = mysqli_real_escape_string($db, $_POST["start$id"]);
			$end = mysqli_real_escape_string($db, $_POST["end$id"]);
		}else{
			$grp = '0';
		}
		$q1 = "select Title from papers where Code='$subCode' and Semester='$sem'";
		$res = mysqli_query($db, $q1);
		$row = mysqli_fetch_assoc($res);
		$subT = $row["Title"];
		$q1 = "select * from faculty1 where Course = '$course' and Branch = '$branch' and Sem = '$sem' and RangeStart = '$st' and RangeEnd = '$end' and SubCode = '$subCode'";
		$res = mysqli_query($db, $q1);
		$row = mysqli_fetch_assoc($res);
		if(mysqli_num_rows($res)==1){
			if($row["Grouping"]){
			array_push($errors,"Subject ".$subCode." ".$subT." for ".$c_b."( ".$st." - ".$end." ) is already taken!!!");
			}else{
			array_push($errors,"Subject ".$subCode." ".$subT." for ".$c_b." is already taken!!!");
			}
		}else{
			$query = "INSERT INTO `faculty1` (`serialno`, `Name`, `SubCode`, `SubName`, `Course`, `Branch`, `Sem`, `Grouping`, `RangeStart`, `RangeEnd`, `Year`, `Midterm`, `FA`, `Practical`, `Grade`, `Freeze`) VALUES (NULL, '$user', '$subCode', '$subT', '$course', '$branch', '$sem', '$grp', '$st', '$end', '2019', '0', '0', '0', NULL, '0')";
			mysqli_query($db, $query);
		}
	   }
		$id = $id - 1;
	}
}
?>