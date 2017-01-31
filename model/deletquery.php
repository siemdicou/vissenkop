<?php

include "../includes/config.php";

$id =$_GET['id'];

$sql = "DELETE FROM articles WHERE id=$id";
// echo  $sql;

$mysqli->query($sql);


?>