

<!DOCTYPE  html >
<html lang="en" >
  <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="main.css">
        <title>Reporting Page</title>

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
    //$(".menu2").show();
    $(".menu").hide();

            $(".menu2").animate({
              height: 'toggle'
            });

        });

    });

    </script>


        <div style="position: relative; left: 3px; width: 100%;">
            <form id = "contact-form" method = "post" action = "submit_report.php">
                <br>
                <textarea name = "message"rows="15" cols="80"> <?php
                    $to_email = "banaw001@cougars.csusm.edu";
                    $subject = "[REPORT] " . $_POST['subject'];
                    $issue = $_POST['select'];
                    $body = "Issue Type: " . $issue . "\n\n" . $_POST['message'];
                    if(mail($to_email,$subject,$body))
                    {
                        echo
                            "We have recieved your report.. \n Thank you for reporting.. \n\n\n";
                    }else{
                        echo "\n\n\nFailed to submit. Please try again\n\n\n";
                        header("Refresh:3; url=index.html");
                    }
                ?> </textarea> <br>
          </form>
            
            
        </div>
      </div>

<?php                         header("Refresh:3; url=index.html"); ?>



      <footer>
        <p>Team C, Copyright &copy; 2019</p>
      </footer>

  </body>

</html>

