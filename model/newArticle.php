<?php

include "../includes/config.php";

$datee = date("Ymd");

$smalltitle   	=  $_POST['smalltitle'];
$smallsummary   =  $_POST['smallsummary']; 
$img   			=  $_POST['img'];
$bigtitle   	=  $_POST['bigtitle']; 
$bigsummary  	=  $_POST['bigsummary'];
$moreimg  	 	=  $_POST['moreimg']; 
$author  	 	=  $_POST['author']; 


$sql = "INSERT INTO articles (smalltitle,smallsummary,img,bigtitle,bigsummary,moreimg,datee,author)
VALUES ('$smalltitle','$smallsummary','$img','$bigtitle','$bigsummary','$moreimg' ,'$datee' ,'$author')";

$result = $mysqli->query($sql);

?>