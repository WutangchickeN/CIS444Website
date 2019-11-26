<?php

$host = "localhost";
$user = "team_c";
$password = "3gCLD+9D+Fx8";
$database = "team_c";

$connect = mysqli_connect($host, $user, $password, $database);
$query = "SELECT * FROM 'ROOM'";
$result1 = mysqli_query($connect, $query);

?>

<!DOCTYPE html>
<!-- view_issues.html
    A web page where users can view issues that have been reported through the Campus Reporter Website -->
<html lang="en">
<head>
    <title>View Issues</title>
    <meta charset="utf-8">
    <style type ="text/css"> td, th, table {border: thin solid black;} img {float: right;}</style>
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="issue_pop_up.js"></script>
</head>
<body>

	<div class="nav">
    <div class="logo" style="padding-top:13px;padding-bottom:10px">
      <i class="fa fa-bandcamp" aria-hidden="true" style="display:inline"></i>
      <h4 style="margin-left:702px;margin-top:0px;margin-bottom:0px;display:inline;color:white">Campus Reporter</h4>
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
 //$(".menu2").show();
 $(".menu").hide();
        $(".menu2").animate({
          height: 'toggle'
        });

    });

});

</script>
 <div class="container">
	<h2>
	View Issues Page
	</h2>
	<form action ="" onsubmit="return popUp()">
		
		<p> <!-- This will be a Map of the Campus(possibly interactive). Aligned to the right-->
			<div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Search%20Results%20333%20S%20Twin%20Oaks%20Valley%20Rd%2C%20San%20Marcos%2C%20CA%2092096&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
		</p>

		<select>
			<?php while($row1 = mysqli_fetch_array($result1)):;?>
			<option><?php echo $row1[1]?></option>
			<?php endwhile;?>
		</select>

		<p> <!-- Select the Building -->
			Building test
			<select name = "Building">
				<option> Any </option>
				<option> Academic Hall </option>
				<option> Arts Building </option>
				<option> Markstein Hall </option>
				<option> Craven Hall </option>
				<option> Extended Learning </option>
				<option> Engineering Pavillion</option>
				<option> Field House </option>
				<option> Kellogg Library </option>
				<option> The McMahan House </option>
				<option> Public Safety Building </option>
				<option> SBSB Building </option>
				<option> Science Hall 1 </option>
				<option> Science Hall 2 </option>
				<option> SHCS Building </option>
				<option> USU </option>
				<option> University Commons</option>
				<option> University Hall </option>
				<option> Veterans Center </option>
			</select>
		</p>
		
		<p> <!-- Select the Floor -->
			Floor
			<select name = "Floor">
				<option> Any </option>
				<option> Lobby </option>
				<option> 1 </option>
				<option> 2 </option>
				<option> 3 </option>
				<option> 4 </option>
				<option> 5 </option>
				<option> 6 </option>
				<option> Roof </option>
			</select>
		</p>
		
		<p> <!-- Insert the Room Number -->
			Room Number
			<input type="text" name="RoomNumber" size="5" maxlength="5">
		</p>
		
		<p> <!-- Select the general issue description -->
			General Issue 
			<select id="slct1" name = "slct1" onchange="populate('slct1', 'slct2')">
				<option> Any </option>
				<option> Damage </option>
				<option> Cleanliness </option>
				<option> Cosmetic </option>
				<option> Technical </option>
				<option> Electrical </option>
				<option> Plumbing </option>
				<option> Equipment </option>
				<option> Other </option>
			</select>
		</p>

		<p> <!-- Select the specific issue description -->
			Specific Issue 
			<select id="slct2" name = "slct2"></select>
		</p>


		<!-- This button will submit a query to the Database in order for the table to be updated -->
		<input type="submit" value="Submit Search" onclick=" "/> 
		
	<hr/>
		<table> <!-- This Table will get information from Database on issues that have been reported. Border: thin solid black-->
			<tr>
				<th> Building </th>
				<th> Floor </th>
				<th> Room Number </th>
				<th> Description</th>
				<th> Status </th>
				<th> Select </th>
			</tr>
			<tr><!-- Placeholder Example of what should happen once the Table gets information from Database-->
				<th> Example </th>
				<th> Example </th>
				<th> Example </th>
				<th> Example </th>
				<th> Incomplete </th>
				<th> <input type="submit" value="Select"/> </th>
			</tr>
			</table>
		</div>

		<footer>
			<p>Team C, Copyright &copy; 2019</p>
		</footer>

	</body>
</html>
