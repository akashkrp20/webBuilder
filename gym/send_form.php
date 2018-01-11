<?php 
// Establish Database connection
$conn = mysqli_connect("localhost", "root", "", "website_contact");
// Check connection
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
      $sql = "INSERT INTO `contactus_form`(`name`, `email`, `messages`) VALUES ('$name', '$email', '$message')";
      echo $sql;
      if(mysqli_query($conn, $sql))
      {
        echo "Records added successfully.";
        /*$email_to = "you@yourdomain.com";
        $subject="Message sent using your contact form";      
        $headers = 'From: '.$name.'<'.$email.'>\r\n';
        mail($email_to,$subject,$message,$headers); */
      }
    }
  }
?>
