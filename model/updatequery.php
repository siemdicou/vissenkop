<?php 

$title   = $_POST["title"];
$content = $_POST["content"];
$author = $_POST["authord"];



$sql = "UPDATE articles (title,content,img,author) VALUES ('$title','$content','$newfilenname','$author') WHERE id = $articleid";


$mysqli->query($sql);

?>