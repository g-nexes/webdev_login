<html>
<head>
	<title>Student</title>
	<link rel="stylesheet" type="text/css" href="css/student.css">
	<link href="css/all.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link href="https://fonts.googleapis.com/css?family=Bebas+Neue|Sulphur+Point|Tomorrow|Ubuntu&display=swap" rel="stylesheet">

	<?php include_once 'dbConfig.php'?>

	<script type="text/javascript">
		function changeImg(){
			setTimeout(function(){
				document.getElementById("img").src="img/details_green.svg"; }, 150);
		}
		function unchangeImg(){
			setTimeout(function(){
				document.getElementById("img").src="img/details_red.svg"; }, 150);
		}
	</script>
</head>
<body>

	<?php
		if(isset($_POST['submit'])){
			$name = stripslashes($_REQUEST['name']);
 			$Name = mysqli_real_escape_string($conn,$name);
			$usn = stripslashes($_REQUEST['usn']);
 			$Usn = mysqli_real_escape_string($conn,$usn);
			$dob = stripslashes($_REQUEST['dob']);
 			$Dob = mysqli_real_escape_string($conn,$dob);
			$course = stripslashes($_REQUEST['course']);
 			$Course= mysqli_real_escape_string($conn,$course);
			$branch = stripslashes($_REQUEST['branch']);
 			$Branch = mysqli_real_escape_string($conn,$branch);
			$email = stripslashes($_REQUEST['email']);
 			$Email = mysqli_real_escape_string($conn,$email);
 			$phone = stripslashes($_REQUEST['phone']);
 			$Phone = mysqli_real_escape_string($conn,$phone);

			$sql="INSERT INTO details(name,usn,dob,course,branch,email,phone) VALUES('$Name','$Usn','$Dob','$Course','$Branch','$Email','$Phone')";

			if($Name==null || $Name=="" || $Name==" " && $Usn==null || $Usn=="" || $Usn==" " && $Dob==null || $Dob=="" || $Dob==" " && $Course==null || $Course=="" || $Course==" " && $Branch==null || $Branch=="" || $Branch==" " && $Email==null || $Email=="" || $Email==" " && $Phone==null || $Phone=="" || $Phone==" "){
				echo '<script type="text/javascript"> alert("Uh oh! Invalid details. Do not leave blank or use whitespaces")</script>';
			}
			else{
				$result = mysqli_query($conn,$sql);
				if(!$result){
					echo '<script type="text/javascript"> alert("Uh oh! Something is wrong")</script>';
				}
				echo '<script type="text/javascript"> alert("Details inserted successfully")</script>';
			}
			header("refresh:2;url=stdentry.php");
	}
	?>

	<img class="bg" src="img/bg.jpg">
	<div class="container">
		<div class="img">
			<img id="img" onmouseover="changeImg()" onmouseout="unchangeImg()" src="img/details_red.svg">
		</div>
		<div class="entry-container">
			<form class="entry" method="POST">
				<img class="logo" src="img/student.svg">
				<h2>Entry Form</h2>
				<div class="input-div">
					<div class="i">
						<i class="fa fa-user"></i>
					</div>
					<div>
						<input class="input" type="text" name="name" placeholder="Enter your Name" maxlength="30"/>
					</div>
				</div>
				<div class="input-div">
					<div class="i">
						<i class="fa fa-id-card"></i>
					</div>
					<div>
						<input class="input" type="text" name="usn" placeholder="Enter your USN" maxlength="10"/>
					</div>
				</div>
				<div class="input-div">
					<div class="i">
						<i class="fa fa-calendar"></i>
					</div>
					<div>
						<input class="input" type="text" name="dob" placeholder="Enter Date of Birth" maxlength="10"/>
					</div>
				</div>
				<div class="input-div">
					<div class="i">
						<i class="fa fa-check-circle"></i>
					</div>
					<div>
						<input class="input" type="text" name="course" placeholder="Enter your Course" maxlength="40"/>
					</div>
				</div>
				<div class="input-div">
					<div class="i">
						<i class="fa fa-check-circle"></i>
					</div>
					<div>
						<input class="input" type="text" name="branch" placeholder="Enter your Branch" maxlength="40"/>
					</div>
				</div>
				<div class="input-div">

					<div class="i">
						<i class="fa fa-envelope"></i>
					</div>
					<div>
						<input class="input" type="text" name="email" placeholder="Enter your Email" maxlength="40"/>
					</div>
				</div>
				<div class="input-div">
					<div class="i">
						<i class="fa fa-phone"></i>
					</div>
					<div>
						<input class="input" type="text" name="phone" placeholder="Enter your Phone Number" maxlength="10"/>
					</div>
				</div>
				<input class="btn" type="submit" name="submit" value="Click Submit"/>
			</form>
		</div>
	</div>
</body>
</html>
