<?php
// Array with names
$a[] = "Mask";
$a[] = "Tshirt";
$a[] = "Short";
$a[] = "Sunglasses";
$a[] = "Bracelet";
$a[] = "Sweater";
$a[] = "Jacket";


// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) { //Case-insensitive strstr (Find the first occurrence of a string)
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name"; //Concatenation assignment
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>