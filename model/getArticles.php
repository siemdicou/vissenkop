

<?php 

	require '../includes/config.php';
	$result = $mysqli->query( "SELECT * FROM articles");
	while($row = $result->fetch_assoc()) {
        echo ' 
        <div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a href="work.html">
					<img src="img/'. $row["img"] . '" class="img-responsive">
				 	<h3 class="content_title">'.$row["title"].'</h3>
				 	<div class="content_article"><p>'.$row["content"].'</p></div>
				 	<div class="content_author">'.$row["author"].'</div>
				 	<div class="content_author">'.$row["date"].'</div>


				</a>
		</div>



';}
 ?>
