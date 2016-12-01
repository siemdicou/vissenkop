<?php

require '../includes/config.php';

	$result = $mysqli->query( "SELECT * FROM articles");
	while($row = $result->fetch_assoc()) {
        echo '<h3 class="content_title" onclick="getData('. $row["id"] .')">'.$row["title"].'</h3>';}

		?>