

<div class="headercont">
	<div id="headerwrap">
	    <div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
					<img src="assets/img/header2.png" alt="header1">
				</div>
			</div><!--/row -->
	    </div> <!-- /container -->
	</div><!--/headerwrap -->
</div>

<section id="works" class="works">
<img class="graatsvg" src="assets/img/graat.svg" alt="graat">
        <section class="welcome">
        	<h1>Vissenkoppen</h1>
        	<div class="overlay"></div>
        </section>
	<div class="container">

		<div class="row centered mt mb">
		<?php foreach ($list as $row){
        echo ' 
   <div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a href="index.php?page=works&id='.$row["id"].'">
					<div class="imgcont"><img src="uploads/'. $row["img"] . '" class="img-responsive"></div>
                    <div id="containercontent">
                        <h3 class="content_title">'.$row["smalltitle"].'</h3>
                        <div class="content_article"><p>'.$row["smallsummary"].'</p></div>
                        <div class="content_author">'.$row["author"].'</div>
				 	<div class="content_author">'.$row["datee"].'</div>
                    </div>
				</a>
	</div>';}
				 ?>
				
		</div><!--/row -->
	</div><!--/container -->
	
<div class="pagincont"><?php include 'views/pagination.php'; ?></div>
</section>
	<div id="social">
		<div class="container">
			<div class="row centered">
				
				<div class="col-lg-4">
					<a href="#"><i class="fa fa-facebook"></i></a>
				</div>
				<div class="col-lg-4">
					<a href="#"><i class="fa fa-twitter"></i></a>
				</div>
				<div class="col-lg-4">
					<a href="#"><i class="fa fa-instagram"></i></a>
				</div>
				
			
			</div><!--/row -->
		</div><!--/container -->
	</div><!--/social -->

	
	


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript">
window.addEventListener('load', function() {
     
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("template_content").innerHTML = xhttp.responseText;
            }
        };
        xhttp.open("GET", "model/getArticles.php", true);
        xhttp.send();
    // var clicked = document.getElementById("").click
}, false);


</script>
    </body>
</html>
