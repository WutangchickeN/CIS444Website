<?php 
$connection = mysqli_connect("localhost" , "root" , "" , "test");
$message = "";
if(isset($_POST['submit'])){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$insert = mysqli_query($connection,"INSERT INTO users (first_name,last_name,username,email,password) VALUES ('{$fname}','{$lname}','{$username}','{$email}','{$password}')");

	$message  = "User Registered Successfully";

}


 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="author" content="Brittany Garcia">
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="main.css">
	<script type = "text/javascript" src = "homepage.js" ></script>

	<style> 
		body{
			overflow-x: hidden;
		}
		#Form input {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			box-sizing: border-box;
		}
		input#button {
			background: #2c3e50;
			color: #fff;
			font-size: 20px;
			font-weight: bold;
			border: 0;
			border-radius: 5px;
		}
	</style>
</head>


<body>
	<div class="nav">
    			<div class="logo" style="padding-top:13px;padding-bottom:10px">
      				<i class="fa fa-bandcamp" aria-hidden="true" style="display:inline"></i>
      				<h4 style="margin-left:802px;margin-top:0px;margin-bottom:0px;display:inline;color:white">Campus Reporter</h4>
      			</div>
   			<div class="main-nav">
      				<a class="hamburger-nav"></a>
     				<ul class="menu">
      					<li><a href="http://cis444.cs.csusm.edu/team_c/submit_ticket.php" style="color: white;"><i class="fa fa-home"></i> Submit a Ticket Page</a></li>
        				<li> <a href="http://cis444.cs.csusm.edu/team_c/view_issues.php" style="color: white;"><i class="fa fa-file-image-o"></i> View Issues Page</a></li>
        				<li><a href="http://cis444.cs.csusm.edu/team_c/reporting.html" style="color: white;"><i class="fa fa-user"></i> Report a problem Page</a></li>
        				<li><a href="http://cis444.cs.csusm.edu/team_c/about.html" style="color: white;"><i class="fa fa-envelope"></i> About page</a></li>
        			</ul>
      
      				<ul class="menu2">
      					<li><a href="http://cis444.cs.csusm.edu/team_c/login.php" style="color: white;"><i class="fa fa-home"></i> Login</a></li>
      					<li><a href="http://cis444.cs.csusm.edu/team_c/registration.php" style="color: white;"><i class="fa fa-file-image-o"></i> Register</a></li>
     		 		</ul>
      			</div>
  		</div>

	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script>
		$(document).ready(function(){

			$(".hamburger-nav").on("click", function(){
				$(".menu2").hide(); 
 					//$(".menu").show();

        				// $(".menu").fadeToggle("slow").toggleClass("menu-hide");
        				$(".menu").animate({
        					height: 'toggle'
        				});
        			});

			$(".fa-bandcamp").on("click", function(){
				$(".menu2").hide(); 
				 //$(".menu").show();
				 $(".menu2").animate({
				 	height: 'toggle'
				 });
				});
		});

	</script>

	<div class="container">
		<div class="banner">
			<div class="app-text">
				<h1 style="text-align: center;">
					Registration Page
				</h1>
				<br>
				<h2 style="text-align: center;color: green"><?php echo $message; ?></h2>
			</div>
		</div>
	</div>

	<section id="newsletter">
		<div class="container">
			<form action="" method="POST" id="Form">
				<label for="fname">First Name</label>
				<input type="text" id="fname" name="fname" required>
				<label for="lname">Last Name</label>
				<input type="text" id="lname" name="lname" required>
				<label for="username">User Name</label>
				<input type="text" id="username" name="username" required>
				<label for="email">Email</label>
				<input type="email" id="email" name="email" required>
				<label for="password">Password</label>
				<input type="password" id="password" name="password" required>
				<input type="submit" name="submit" value="Register" id="button">
			</form>
		</div>
	</section>


	<footer class="0-FooterFrech" id="footer">
		<p>Team C, Copyright &copy; 2019</p>
	</footer>

</body>
</html>
