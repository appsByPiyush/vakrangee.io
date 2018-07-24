<?php
header("Location: index.html");
$from=$_POST["email"];
$maile = $_POST["email"];

$to = "piyushsuhalka.ps@gmail.com";
$subject = "Website : Course Enquiry ";
$cou=$_POST["course"];
$name=$_POST["name"];
$phne=$_POST["phoneno"];
mail($to,$subject,"$name:\n".$cou,$phne."\n".$maile);
?>