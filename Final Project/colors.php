<?php
// email-pwd.php 
//  Gets the form value from the "email" widget, looks up the 
//  password for that email, and prints it for the
//  form
      
  $colorList = array("S" => "Red Yellow",
  					         "L" => "Green Blue"
                     );
  header("Content-Type: text/plain");
  $c= $_GET["c"];

  if (array_key_exists($c, $colorList))
    print $colorList[$c];
  else
    print " ";
?>