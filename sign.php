<html>
<head>
	<title>Sign in</title>
	<script type="text/javascript" src="main.js"></script>
	<link rel="stylesheet" type="text/css" href="css/signstyle.css">
	<link href="css/all.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link href="https://fonts.googleapis.com/css?family=Bebas+Neue|Sulphur+Point|Tomorrow|Ubuntu&display=swap" rel="stylesheet">
	<?php include_once 'dbConfig.php'; ?>

	<script type="text/javascript">
		function validate(){
			var username = document.getElementById('user');
			var password = document.getElementById('pw');
 
			if(username==null || username=="" || username==" "){
  				alert("Username can't be blank");
  				return false;
			}
			else if(password==null || password=="" || password==" "){
  				alert("password can't be blank");
  				return false;
			}
		}
		function changeProfile(){
			setTimeout(function(){
				document.getElementById("profile").src="img/profile_new.svg"; }, 200);
		}
		function unchangeProfile(){
			setTimeout(function(){
				document.getElementById("profile").src="img/profile_pic.svg"; }, 200);
		}
	</script>
</head>
<body>
	<?php
		session_start();
		if(isset($_POST['signup'])){
			$user_name = mysqli_real_escape_string($conn,$_REQUEST['username']);
			$password = mysqli_real_escape_string($conn,$_REQUEST['pass']);

			$sql = "INSERT INTO sign(usrname,pword) VALUES('$user_name','$password')";

			if($user_name==null || $user_name=="" || $user_name==" " && $password==null || $password=="" || $password==" "){
				echo '<script type="text/javascript"> alert("Username & Password can not be blank or contain only white spaces")</script>';
			}
			else{
				$result = mysqli_query($conn,$sql);
				if(!$result){
					echo '<script type="text/javascript"> alert("Sign Up Not Successful or You have already Signed Up, try Sign In")</script>';
				}
				echo '<script type="text/javascript"> alert("Sign Up Successful and now Sign In")</script>';
			}

			header("refresh:2;url=sign.php");
		}

		if (isset($_POST['signin'])){
 		$username = stripslashes($_REQUEST['username']);
 		$user_name = mysqli_real_escape_string($conn,$username);
 		$pass_word = stripslashes($_REQUEST['pass']);
 		$password = mysqli_real_escape_string($conn,$pass_word);
        $query = "SELECT * FROM sign WHERE usrname='$user_name' and pword='$password'";
 		
 		$result = mysqli_query($conn,$query);
 		$rows = mysqli_num_rows($result);
        	if($rows>0){
     			header("Location: stdentry.php");
         	}
         	else{
         		echo '<script type="text/javascript"> alert("Sign In Not Successful")</script>';
         	}
         }
	?>

	<img class="background" src="img/background.png">
	<div class="container">
		<div class="img">
			<img src="img/Login.svg">
		</div>
		<div class="login-container">
			<form class="sign" method="POST">
				<img onmouseover="changeProfile()" onmouseout="unchangeProfile()" id="profile" class="profile" src="img/profile_pic.svg">
				
				<svg id="wel_svg" width="699" height="114" viewBox="0 0 699 114" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M140.849 6.632L111.761 107H97.0732L73.7452 26.216L49.5532 107L35.0092 107.144L6.9292 6.632H20.8972L42.7852 91.736L66.9772 6.632H81.6652L104.705 91.448L126.737 6.632H140.849Z" stroke="#38d39f" stroke-width="5" mask="url(#path-1-outside-1)"/>
<path d="M168.294 17.288V50.84H204.87V61.64H168.294V96.2H209.19V107H155.19V6.488H209.19V17.288H168.294Z" stroke="#38d39f" stroke-width="5" mask="url(#path-1-outside-1)"/>
<path d="M242.122 96.344H277.258V107H229.018V6.632H242.122V96.344Z" stroke="#38d39f" stroke-width="5" mask="url(#path-1-outside-1)"/>
<path d="M286.278 56.744C286.278 46.952 288.486 38.168 292.902 30.392C297.318 22.52 303.318 16.376 310.902 11.96C318.582 7.544 327.078 5.336 336.39 5.336C347.334 5.336 356.886 7.976 365.046 13.256C373.206 18.536 379.158 26.024 382.902 35.72H367.206C364.422 29.672 360.39 25.016 355.11 21.752C349.926 18.488 343.686 16.856 336.39 16.856C329.382 16.856 323.094 18.488 317.526 21.752C311.958 25.016 307.59 29.672 304.422 35.72C301.254 41.672 299.67 48.68 299.67 56.744C299.67 64.712 301.254 71.72 304.422 77.768C307.59 83.72 311.958 88.328 317.526 91.592C323.094 94.856 329.382 96.488 336.39 96.488C343.686 96.488 349.926 94.904 355.11 91.736C360.39 88.472 364.422 83.816 367.206 77.768H382.902C379.158 87.368 373.206 94.808 365.046 100.088C356.886 105.272 347.334 107.864 336.39 107.864C327.078 107.864 318.582 105.704 310.902 101.384C303.318 96.968 297.318 90.872 292.902 83.096C288.486 75.32 286.278 66.536 286.278 56.744Z" stroke="#38d39f" stroke-width="5" mask="url(#path-1-outside-1)"/>
<path d="M447.912 108.008C438.6 108.008 430.104 105.848 422.424 101.528C414.744 97.112 408.648 91.016 404.136 83.24C399.72 75.368 397.512 66.536 397.512 56.744C397.512 46.952 399.72 38.168 404.136 30.392C408.648 22.52 414.744 16.424 422.424 12.104C430.104 7.688 438.6 5.48 447.912 5.48C457.32 5.48 465.864 7.688 473.544 12.104C481.224 16.424 487.272 22.472 491.688 30.248C496.104 38.024 498.312 46.856 498.312 56.744C498.312 66.632 496.104 75.464 491.688 83.24C487.272 91.016 481.224 97.112 473.544 101.528C465.864 105.848 457.32 108.008 447.912 108.008ZM447.912 96.632C454.92 96.632 461.208 95 466.776 91.736C472.44 88.472 476.856 83.816 480.024 77.768C483.288 71.72 484.92 64.712 484.92 56.744C484.92 48.68 483.288 41.672 480.024 35.72C476.856 29.672 472.488 25.016 466.92 21.752C461.352 18.488 455.016 16.856 447.912 16.856C440.808 16.856 434.472 18.488 428.904 21.752C423.336 25.016 418.92 29.672 415.656 35.72C412.488 41.672 410.904 48.68 410.904 56.744C410.904 64.712 412.488 71.72 415.656 77.768C418.92 83.816 423.336 88.472 428.904 91.736C434.568 95 440.904 96.632 447.912 96.632Z" stroke="#38d39f" stroke-width="5" mask="url(#path-1-outside-1)"/>
<path d="M617.419 7.352V107H604.315V32.696L571.195 107H561.979L528.715 32.552V107H515.611V7.352H529.723L566.587 89.72L603.451 7.352H617.419Z" stroke="#38d39f" stroke-width="5" mask="url(#path-1-outside-1)"/>
<path d="M652.747 17.288V50.84H689.323V61.64H652.747V96.2H693.643V107H639.643V6.488H693.643V17.288H652.747Z" stroke="#38d39f" stroke-width="5" mask="url(#path-1-outside-1)"/>
</svg>


				<!-- <h2>welcome</h2> -->
				<div class="input-div one">
					<div class="i">
						<i class="fa fa-user"></i>
					</div>
					<div>
						<input id="user" class="input" type="text" placeholder="Username" name="username" maxlength="30" autocomplete=="off" required/>
					</div>
				</div>
				<div class="input-div two">
					<div class="i">
						<i class="fa fa-lock"></i>
					</div>
					<div>
						<input id="pw" class="input" type="password" placeholder="Password" name="pass" maxlength="16" required/>
					</div>
				</div>
				<a href="forgotpassword.php">Forgot password?</a>
				<input class="btn one" type="submit" name="signup" value="Sign Up"/>
				<input class="btn two" type="submit" name="signin" value="Sign In"/>
			</form>
		</div>
	</div>
	
</body>
</html>