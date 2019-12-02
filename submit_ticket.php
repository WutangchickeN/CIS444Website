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
			  	<li><a href="http://cis444.cs.csusm.edu/team_c/submit_ticket.php" style="color: white;"><i class="fa fa-home"></i> Submit a Ticket Page</a></li>
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
		<input type="hidden" name="submitted" value= "true"/>
			
			<p> <!-- This will be a Map of the Campus(possibly interactive). Aligned to the right-->
				<div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Search%20Results%20333%20S%20Twin%20Oaks%20Valley%20Rd%2C%20San%20Marcos%2C%20CA%2092096&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
			</p>

            <form action="submit_ticket.php" method="post">
            <p> <!-- Get the ID number of the submitter -->
                Your ID Number
                <input type="text" name="ID_Number" size="9" maxlength="9">
            </p>

			<p> <!-- Select the Building -->
				Building 
				<select name = "Building1" >
                    <option value=""> Any </option>
                    <option value="Acad"> Academic Hall </option>
                    <option value="Arts"> Arts Building </option>
                    <option value="Mark"> Markstein Hall </option>
                    <option value="Cra"> Craven Hall </option>
                    <option value="EL"> Extended Learning </option>
                    <option value="EP"> Engineering Pavillion</option>
                    <option value="FH"> Field House </option>
                    <option value="Kellog"> Kellogg Library </option>
                    <option value="McMahan"> The McMahan House </option>
                    <option value="Safety"> Public Safety Building </option>
                    <option value="SBSB"> SBSB </option>
                    <option value="Sci1"> Science Hall 1 </option>
                    <option value="Sci2"> Science Hall 2 </option>
                    <option value="SHCS"> SHCS Building </option>
                    <option value="USU"> USU </option>
                    <option value="Comm"> University Commons</option>
                    <option value="Univ"> University Hall </option>
                    <option value="Vets"> Veterans Center </option>
				</select>
			</p>
			
			<p> <!-- Select the Floor -->
				Floor
				<select name = "Floor1">
                    <option value=""> Any </option>
                    <option value="L"> Lobby </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                    <option value="5"> 5 </option>
                    <option value="6"> 6 </option>
                    <option value="R"> Roof </option>
                </select>
			</p>
			
			<p> <!-- Insert the Room Number -->
				Room Number
				<input type="text" name="RoomNumber1" size="5" maxlength="5">
			</p>
			
			<p> <!-- Select the general issue description -->
				General Issue 
				<select id="slct1" name = "slct1" onchange="populate('slct1', 'slct2')">
                    <option value=""> Any </option>
                    <option value="Damage"> Damage </option>
                    <option value="Cleanliness"> Cleanliness </option>
                    <option value="Cosmetic"> Cosmetic </option>
                    <option value="Technical"> Technical </option>
                    <option value="Electrical"> Electrical </option>
                    <option value="Plumbing"> Plumbing </option>
                    <option value="Equipment"> Equipment </option>
                    <option value="Other"> Other </option>
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
            <input type="submit" value="submit" name='submit'/>
			<!-- This button will clear the form -->
			<input type="reset" value="Clear Form" /> 

            </form>
    </div>
        <?php
if (isset($_POST['submit']))
    { select();}

function select()
{


    $DBConnect = mysqli_connect("localhost", "team_c", "3gCLD+9D+Fx8", "team_c");
    if (!$DBConnect)
        echo "<p>Connection failure</p>";
    else
        echo "<p>Connection Successful</p>";

    $stmt = $DBConnect->prepare("INSERT INTO REPORT (General_Type, Specific_Type, Descr, Status, Building, Room_Number, Floor, ID_Number, Report_Date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $ID_NUM = ($_POST['ID_Number']);
    $BUILDING = $_POST['Building1'];
    $FLOOR = $_POST['Floor1'];
    $ROOMNUM = $_POST['RoomNumber1'];
    $GENTYPE = $_POST['slct1'];
    $SPECIFICTYPE = $_POST['slct2'];
    $DESCR = ($_POST['extraInfo']);
    $STATUS = 'Incomplete';
    $RPT_DT = date("Ymd");

    $stmt->bind_param('ssssssssi', $GENTYPE, $SPECIFICTYPE, $DESCR, $STATUS, $BUILDING, $ROOMNUM, $FLOOR, $ID_NUM, $RPT_DT);
    $stmt->execute();

    $QueryResult = mysqli_query($DBConnect, "SELECT* FROM REPORT WHERE Building = '$BUILDING' AND Room_Number = '$ROOMNUM';");
    echo "<table width='100%' border='1'>";
    echo "<tr><th>General type</th><th>Specific type</th><th>Description</th><th>Report Number</th><th>Status</th><th>Building</th><th>Room Number</th><th>Floor</th><th>ID Number</th><th>Report Date</th><th>Complete Date</th><th>Completed By</th>";

    while ($row = mysqli_fetch_assoc($QueryResult)) {
        echo "<tr>";
        foreach ($row as $column)
            echo "<td>$column</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($DBConnect);
}
 ?>
			<hr/>
    </body>
</html>
