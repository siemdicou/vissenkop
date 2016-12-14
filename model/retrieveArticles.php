<?php
require '../includes/config.php';
$id = $_GET['clicked'];
	$result = $mysqli->query( "SELECT * FROM articles WHERE id = '$id'");

	$row = $result->fetch_assoc();

	echo "<h3>Artikel aanpassen</h3>
	<form method='POST' action='../model/updatearticle.php'>
		<input type='text' value='" . $row["smalltitle"] . "' name='smalltitle'>
		<input type='text' value='" . $row["smallsummary"] . "' name='smallsummary'>
		<input type='file' value='" . $row["img"] . " name='fileupload'>
		<hr>
		<input type='text' value='" . $row["bigtitle"] . "' name='bigtitle'>
		<input type='text' value='" . $row["bigsummary"] . "' name='bigsummary'>
		
		<input type='hidden' value='" . $row["author"] . "' name='author'>
		<input type='hidden' value='" . $id . "' name='id'>
		<input type='button' onClick='' value='delete'>
		<input type='submit' value='aanpassen'>

		</form>";

	$row['id'];

?>