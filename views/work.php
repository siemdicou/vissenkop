<?php 
$id = (empty($_GET ['id'])) ? '' : $_GET['id'];    
// var_dump($id);

	$result = $mysqli->query("SELECT * FROM articles WHERE id = '$id'");
	
	$row = $result->fetch_assoc();
	// var_dump($row);
 
echo'
<div class="workcont">
	<div id="workwrap">
	    <div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
					<h1>'.$row['bigtitle'].'</h1>
					<h4>Wijk: '.$row['wijk'].'</h4>
				</div>
			</div><!--/row -->
	    </div> <!-- /container -->
	</div><!--workwrap --> 
      </div>	
	<section id="works"></section>
	<div class="container">
		<div class="row mt mb">
			<div class="col-lg-8 col-lg-offset-2">
				<h4>Verhaal nummero uno</h4>
				<p>'.$row['smallsummary'].'</p>
				<h4>groot verhaal</h4>
				<p>'.$row['bigsummary'].'</p>
				<h4>Verhaal nummero uno</h4>


				<h2>'.$row['subtitleone'].'</h2>
				
				<p>'.$row['subsummaryone'].'</p>
				
				<h2>'.$row['subtitletwo'].'</h2>
				
				<p>'.$row['subsummarytwo'].'</p>
				
				<h2>'.$row['subtitlethree'].'</h2>
				
				<p>'.$row['subsummarythree'].'</p>
				
				<h2>'.$row['subtitlefour'].'</h2>
				
				<p>'.$row['subsummaryfour'].'</p>
				
				<h2>'.$row['subtitlefive'].'</h2>
				
				<p>'.$row['subsummaryfive'].'</p>

			</div>
			<div class="col-lg-10 col-lg-offset-1 mt">
				<img class="img-responsive" src="uploads/'.$row['img'].'">
				<br>';
				$photoarray = unserialize($row["moreimg"]);
				$countimage = count($photoarray);

				$count = 0;
					while ($count < $countimage){
						

						echo "<img src='uploads/" . $photoarray[$count] . "' width='20%'> ";

				$count++;
					}
				echo '
			</div>
			<div class="col-lg-8 col-lg-offset-2 mt">
				<h4>ECHTER TOCH NOG</h4>
				<br>
				<p>'.$row['datee']. '  ' .$row['author'] .'</p>
			</div>
		</div><! --/row -->
	</div><! --/container -->
	



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    </body>
</html>
';?>