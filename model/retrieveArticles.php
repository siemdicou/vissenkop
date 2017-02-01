<?php
require '../includes/config.php';
$id = $_GET['clicked'];
	$result = $mysqli->query( "SELECT * FROM articles WHERE id = '$id'");

	$row = $result->fetch_assoc();

	echo "<h3>Artikel aanpassen</h3>
	<form method='POST' action='model/updatearticle.php' enctype='multipart/form-data'>
		<input type='text' placeholder='kleinetitel' value='" . $row["smalltitle"] . "' name='kleinetitel'>
		<input type='text' placeholder='kleinesamenvating tekst' value='" . $row["smallsummary"] . "' name='kleinesamenvatting'>
		<p>single image upload</p>

		<input type='file' name='filess[]' accept='image/*'>
		<br>

		<img src=uploads/". $row["img"] ." width='150px'>
		<hr>
		<input type='text' placeholder='grotetitel' value='" . $row["bigtitle"] . "' name='grotetitel'>
		<input type='text' placeholder='grotetekst' value='" . $row["bigsummary"] . "' name='grotetekst'>
		<br>
		<br>
		<input type='text' placeholder='subtiteleen' value='" . $row["subtitleone"] . "' name='subtiteleen'>
		<input type='text' placeholder='groteteksteen' value='" . $row["subsummaryone"] . "' name='groteteksteen'>
		<br>
		<input type='text' placeholder='subtiteltwo' value='" . $row["subtitletwo"] . "' name='subtiteltwee'>
		<input type='text' placeholder='groteteksttwo' value='" . $row["subsummarytwo"] . "' name='groteteksttwee'>
		<br>
		<input type='text' placeholder='subtitelthree' value='" . $row["subtitlethree"] . "' name='subtiteldrie'>
		<input type='text' placeholder='grotetekstthree' value='" . $row["subsummarythree"] . "' name='grotetekstdrie'>
		<br>
		<input type='text' placeholder='subtitelfour' value='" . $row["subtitlefour"] . "' name='subtitelvier'>
		<input type='text' placeholder='grotetekstfour' value='" . $row["subsummaryfour"] . "' name='grotetekstvier'>
		<br>
		<input type='text' placeholder='subtitelfive' value='" . $row["subtitlefive"] . "' name='subtitelvijf'>
		<input type='text' placeholder='grotetekstfive' value='" . $row["subsummaryfive"] . "' name='grotetekstvijf'>

		<p>Multiple image upload</p>

		<input type='file' name='files[]' multiple='multiple' accept='image/*'>
		<br>
		";
		$photoarray = unserialize($row["moreimg"]);
$countimage = count($photoarray);

$count = 0;
	while ($count < $countimage){
		

		echo "<img src='uploads/" . $photoarray[$count] . "'width='150px'>";

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
