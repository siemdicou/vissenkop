<?php
require '../includes/config.php';
$id = $_GET['clicked'];
	$result = $mysqli->query( "SELECT * FROM articles WHERE id = '$id'");

	$row = $result->fetch_assoc();

	echo "<h3>Artikel aanpassen</h3>
	<form method='POST' action='../model/updatearticle.php' enctype='multipart/form-data'>
		<input type='text' placeholder='kleinetitel' value='" . $row["smalltitle"] . "' name='smalltitle'>
		<input type='text' placeholder='kleinesamenvating tekst' value='" . $row["smallsummary"] . "' name='smallsummary'>
		<p>single image upload</p>

		<input type='file' name='filess[]' accept='image/*'>
		<br>

		<img src=../uploads/". $row["img"] ." width='150px'>
		<hr>
		<input type='text' placeholder='grotetitel' value='" . $row["bigtitle"] . "' name='bigtitle'>
		<input type='text' placeholder='grotetekst' value='" . $row["bigsummary"] . "' name='bigsummary'>

		<input type='text' placeholder='subtiteleen' value='" . $row["subtitleone"] . "' name='subtitleone'>
		<input type='text' placeholder='groteteksteen' value='" . $row["subsummaryone"] . "' name='subsummaryone'>

		<input type='text' placeholder='subtiteltwo' value='" . $row["subtitletwo"] . "' name='subtitletwo'>
		<input type='text' placeholder='groteteksttwo' value='" . $row["subsummarytwo"] . "' name='subsummarytwo'>

		<input type='text' placeholder='subtitelthree' value='" . $row["subtitlethree"] . "' name='subtitlethree'>
		<input type='text' placeholder='grotetekstthree' value='" . $row["subsummarythree"] . "' name='subsummarythree'>

		<input type='text' placeholder='subtitelfour' value='" . $row["subtitlefour"] . "' name='subtitlefour'>
		<input type='text' placeholder='grotetekstfour' value='" . $row["subsummaryfour"] . "' name='subsummaryfour'>

		<input type='text' placeholder='subtitelfive' value='" . $row["subtitlefive"] . "' name='subtitlefive'>
		<input type='text' placeholder='grotetekstfive' value='" . $row["subsummaryfive"] . "' name='subsummaryfive'>

		<p>Multiple image upload</p>

		<input type='file' name='files[]' multiple='multiple' accept='image/*'>
		<br>
		";
		$photoarray = unserialize($row["moreimg"]);
$countimage = count($photoarray);

$count = 0;
	while ($count < $countimage){
		

		echo "<img src='../uploads/" . $photoarray[$count] . "'width='150px'>";

$count++;
	}



echo "
		<br>
		<br>
		<input type='hidden' value='" . $row["author"] . "' name='author'>
		<input type='hidden' value='" . $id . "' name='id'>
		<input type='button' onClick='deleteArticle(" . $id . ")' value='delete'>
		<input type='submit' value='aanpassen'>

		</form>";

	$row['id'];


?>
