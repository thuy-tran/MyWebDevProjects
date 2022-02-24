<?php
// email-pwd.php 
//  Gets the form value from the "email" widget, looks up the 
//  password for that email, and prints it for the
//  form
      
  $emailList = array("teely" => "Yorku1234"
                     );
  header("Content-Type: text/plain");
  $email = $_GET["email"];

  if (array_key_exists($email, $emailList))
    print $emailList[$email];
  else
    print "";
?>