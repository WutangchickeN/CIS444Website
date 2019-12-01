<?php
    //connect.php
    $con = mysqli_connect("localhost", "team_c", "3gCLD+9D+Fx8");
    // Connection Failed
    if(!con){
        print "Connecting to MySQL has failed.";
        exit;
    }
    // Account Selection on Server
    $userAccount = mysqli_select_db($con, "team_c");


    if(!$userAccount){
        print "Error - Unable to select the team_c database.";
        exit;
    }
?>