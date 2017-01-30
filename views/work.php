<?php 
$id = (empty($_GET ['id'])) ? '' : $_GET['id'];    
var_dump($id);

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
					<h4>Beroep: '.$row['beroep'].'</h4>
				</div>
			</div><!--/row -->
	    </div> <!-- /container -->
	</div><!--workwrap --> 
      </div>	
	<section id="works"></section>
	<div class="container">
		<div class="row centered mt mb">
			<div class="col-lg-8 col-lg-offset-2">
				<h4>Verhaal nummero uno</h4>
				<p>'.$row['smallsummary'].'</p>
				<h4>groot verhaal</h4>
				<p>'.$row['bigsummary'].'</p>
			</div>
			<div class="col-lg-10 col-lg-offset-1 mt">
				<img class="img-responsive" src="uploads/'.$row['img'].'">
				<br>
				<img class="img-responsive" src="uploads/'.$row['img'].'">
			</div>
			<div class="col-lg-8 col-lg-offset-2 mt">
				<h4>ECHTER TOCH NOG</h4>
				<br>
				<p>'.$row['datee']. '  ' .$row['author'] .'</p>
			</div>
		</div><! --/row -->
	</div><! --/container -->
	
	<div id="social">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-2">
					<a href="#"><i class="fa fa-dribbble"></i></a>
				</div>
				<div class="col-lg-2">
					<a href="#"><i class="fa fa-facebook"></i></a>
				</div>
				<div class="col-lg-2">
					<a href="#"><i class="fa fa-twitter"></i></a>
				</div>
				<div class="col-lg-2">
					<a href="#"><i class="fa fa-linkedin"></i></a>
				</div>
				<div class="col-lg-2">
					<a href="#"><i class="fa fa-instagram"></i></a>
				</div>
				<div class="col-lg-2">
					<a href="#"><i class="fa fa-tumblr"></i></a>
				</div>
			
			</div><! --/row -->
		</div><! --/container -->
	</div><! --/social -->

	<div id="footerwrap">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-4">
					<p><b>Kijken doe je met je ogen</b></p>
				</div>
			
				<div class="col-lg-4">
					<p>Zien doen je in ijmuiden</p>
				</div>
				<div class="col-lg-4">
					<p>g.jaapstok@wiewwav.nl</p>
				</div>
			</div>
		</div>
	</div><! --/footerwrap -->
	


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    </body>
</html>
';?>