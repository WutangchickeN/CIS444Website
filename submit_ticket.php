<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta name="author" content="Brittany Garcia">
		<title>Submit a Maintenance Ticket</title>
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="main.css">
	<script src="submit_ticket.js"></script>
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
        			<li> <a href="http://cis444.cs.csusm.edu/team_c/view_issues.php" style="color: white;"><i class="fa fa-file-image-o"></i> View Issues Page</a></li>
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
			Submit Ticket Page
		</h2>
		<form method ="POST" action ="submit_ticket.php">
		<input type="hidden" name="submitted" value= "true"/>
			
			<p> <!-- This will be a Map of the Campus(possibly interactive). Aligned to the right-->
				<div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Search%20Results%20333%20S%20Twin%20Oaks%20Valley%20Rd%2C%20San%20Marcos%2C%20CA%2092096&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
			</p>

			<p> <!-- Select the Building -->
				Building 
				<select name = "Building" >
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

			<p> Provide any Additional Information: </p>
			<p><!-- Text area for any additional information the user wishes to provide -->
				<textarea name="extraInfo" rows="3" cols="40"> </textarea>
			</p>

			
			<!-- This button will submit a query to the Database in order for the table to be updated -->
			<input type="submit" value="Submit Ticket"/> 
			<!-- This button will clear the form -->
			<input type="reset" value="Clear Form" /> 

		</form>
<?php 
if (isset($_POST['submitted'])) {
	
	$DBConnect= mysqli_connect("localhost", "team_c", "3gCLD+9D+Fx8", "team_c");
	if(!$DBConnect)
	echo"<p>Connection failure</p>";
	else
	echo "<p>Connection Successful</p>";
	
	$GeneralType = $_POST['slct1'];
	$SpecificType = $_POST['slct2'];
	$Description = $_POST['extraInfo'];
	$Building = $_POST['Building'];
	$RoomNumber = $_POST['RoomNumber'];
	$Floor = $_POST['Floor']; 

	$SQLstring = "INSERT INTO REPORT (General_type, Specific_type, Descr, Report_No, Status, Building, Room_Number, Floor, ID_Number, Report_Date, Complete_Date, Completed_By) VALUES ('$GeneralType', '$SpecificType', '$Description', '00000001', 'Incomplete', '$Building', '$RoomNumber', '$Floor', '123456789', '2020-01-01', '2020-02-02 ', 'NONE')";

	if(!mysqli_query($DBConnect, $SQLstring)){
		echo "<p>Error Inserting New Reporting Ticket<?p>";
	}
	else
		echo "<p>Reporting Ticket added to the Database</p>";
	}

	$QueryResult = mysqli_query($DBConnect, "SELECT* FROM REPORT");
	echo "<table width='100%' border='1'>";
	echo "<tr><th>General type</th><th>Specific type</th><th>Description</th><th>Report Number</th><th>Status</th><th>Building</th><th>Room Number</th><th>Floor</th><th>ID Number</th><th>Report Date</th><th>Complete Date</th><th>Completed By</th>";

	while ($row = mysqli_fetch_assoc($QueryResult)) {
		echo "<tr>";
		foreach ($row as $column) 
			echo "<td>$column</td>";
		echo"</tr>";	
	}

	echo "</table>";
	mysqli_close($DBConnect);
 ?>

			<hr/>

		<footer>
			<p>Team C, Copyright &copy; 2019</p>
		</footer>

    </body>
</html>
