
<?php 
	require '../includes/config.php';
	$result = $mysqli->query( "SELECT * FROM articles");
	while($row = $result->fetch_assoc()) {
        echo ' 

                <h3 class="berichttitle">'.$row["title"].'</h3>'.$row["content"]."<Br>".
                $row["img"]."<Br>".
                $row["author"]."<Br>".
                $row["date"]."<Br>".
                $row["id"];}
 ?>