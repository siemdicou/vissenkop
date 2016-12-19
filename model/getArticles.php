

<?php 

	require '../includes/config.php';
	$result = $mysqli->query( "SELECT * FROM articles");
	while($row = $result->fetch_assoc()) {
        echo ' 
   <div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a href="work.html">
                 
					<img src="uploads/'. $row["img"] . '" class="img-responsive">
                    <div id="containercontent">
                        <h3 class="content_title">'.$row["smalltitle"].'</h3>
                        <div class="content_article"><p>'.$row["smallsummary"].'</p></div>
                        <div class="content_author">'.$row["author"].'</div>
				 	<div class="content_author">'.$row["datee"].'</div>
                    </div>
                
				</a>
	</div>';}
 ?>