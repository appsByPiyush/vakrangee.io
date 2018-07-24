<?php
header("index.")
$from=$_POST["email"];
$maile = $_POST["email"];

$to = "piyushsuhalka.ps@gmail.com";
$subject = "Subscription Request";
$mess="Add Me to To Your Subscription List";
mail($to,$subject,$maile,$mess);
?>