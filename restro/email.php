<?php

$conn = mysqli_connect("localhost", "d3minnez_limedem", "limestem@123@%", "d3minnez_limedemo");

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}



 if(isset($_POST['submit'])) 
  { 
	
    if( empty($_POST['name']) || empty($_POST['cemail']) || empty($_POST['message']))
    {
      echo "Please enter all details!!!!!!!!!!"; 
    }
    else
    {
      $name = $_POST['name'];    
      $email = $_POST['cemail']; 
      $message = $_POST['message']; 

      //Insert query execution
      $sql = "INSERT INTO `contactus_form`(`name`, `email`, `message`) VALUES ('$name', '$email', '$message')";
      if(mysqli_query($conn, $sql))
      {  
	
	$mailto="shubhrant.limestem@gmail.com";  //Enter recipient email address here

       $subject = "Email from ContactUs page of Agriculture";

       $from="shubhrant.srivastava@limestem.com"; //Your valid email address here

       //$message_body = "This is a test email from Webmaster.";

       mail($mailto,$subject,$message,"From:".$from);

       echo "Your email has been sent successfully";
      }
    }
  }
