<?php 
$connection = mysqli_connect("localhost" , "root" , "" , "test");
$err_message = "";
if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = mysqli_query($connection,"SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}' ");

	
		if(mysqli_num_rows($query) == 0)//returns the number of rows in a result set.
		{
			$err_message  = "Your Username and Password are Wrong";
			
		}
		else
		{
			header("Location:index.html");
		}

}


 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="author" content="Brittany Garcia">
	<title>Login</title>
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
				<li><a href="http://cis444.cs.csusm.edu/team_c/submit_ticket.html" style="color: white;"><i class="fa fa-home"></i> Submit a Ticket Page</a></li>
				<li> <a href="http://cis444.cs.csusm.edu/team_c/view_issues.html" style="color: white;"><i class="fa fa-file-image-o"></i> View Issues Page</a></li>
				<li><a href="http://cis444.cs.csusm.edu/team_c/reporting.html" style="color: white;"><i class="fa fa-user"></i> Report a problem Page</a></li>
				<li><a href="http://cis444.cs.csusm.edu/team_c/about.html" style="color: white;"><i class="fa fa-envelope"></i> About page</a></li>
			</ul>

			<ul class="menu2">
				<li><a href="#home" style="color: white;"><i class="fa fa-home"></i> Login</a></li>
				<li>  <a href="#portfolio" style="color: white;"><i class="fa fa-file-image-o"></i> Register</a></li>
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
					Login Page
				</h1>
				<br>
				<h2 style="text-align: center;color: red;"><?php echo $err_message; ?></h2>
			</div>
		</div>
	</div>

	<section id="newsletter">
		<div class="container">
			<form action="" method="POST" id="Form">
				<label for="username">User Name</label>
				<input type="text" id="username" name="username" required>
				<label for="password">Password</label>
				<input type="password" id="password" name="password" required>
				<input type="submit" name="login" value="Login" id="button">
			</form>
		</div>
	</section>


	<footer class="0-FooterFrech" id="footer">
		<p>Team C, Copyright &copy; 2019</p>
	</footer>

</body>
</html>
