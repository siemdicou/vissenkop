<?php

include "../includes/config.php":

$id =$_GET['clicked'];

$sql = "DELETE FROM articles WHERE id=$id";

$mysqli->query($sql);


?>