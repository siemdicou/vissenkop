

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

	<div class="container">
        <h1>Vissenkoppen</h1>
		<div class="row centered mt mb">
			
				<div id="template_content"></div>
				
		</div><!--/row -->
	</div><!--/container -->
	

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
