
<?php
// bepaald hoeveeel producten per pagina zichtbaar zijn
// include '../includes/config.php';
$num_rec_per_page=5;
if (isset($_GET["page_nr"])) {
    $page  = $_GET["page_nr"];
} else {
    $page=1;
};
$start_from = ($page-1) * $num_rec_per_page;
$sql = "SELECT * FROM articles LIMIT ".$start_from.",". $num_rec_per_page;
$result = $mysqli->query($sql);
if($result->num_rows > 0){
    while($rows = $result->fetch_assoc()){
        $list[] = $rows;
        // var_dump($list);
    }
}
// bepaald hoeveel pages erin tottaal zijn
$sql = "SELECT * FROM articles";
$rs_result = $mysqli->query($sql);
$total_records =$rs_result->num_rows;
$total_pages = ceil($total_records / $num_rec_per_page);

	// require 'includes/config.php';
	// $result = $mysqli->query( "SELECT * FROM articles");
	// while($row = $result->fetch_assoc()) {
 //        echo ' 
 //   <div class="col-lg-4 col-md-4 col-sm-4 gallery">
	// 			<a href="work.php?page=works&id='.$row["id"].'">
	// 				<img src="uploads/'. $row["img"] . '" class="img-responsive">
 //                    <div id="containercontent">
 //                        <h3 class="content_title">'.$row["smalltitle"].'</h3>
 //                        <div class="content_article"><p>'.$row["smallsummary"].'</p></div>
 //                        <div class="content_author">'.$row["author"].'</div>
	// 			 	<div class="content_author">'.$row["datee"].'</div>
 //                    </div>
	// 			</a>
	// </div>';}
 ?>
