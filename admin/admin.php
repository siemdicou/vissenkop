<?php
session_start(); 
 if (isset($_SESSION['login_user'])) {
		?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!DOCTYPE html>
<html>
<head>

<script src="../sweetalert-master/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../sweetalert-master/dist/sweetalert.css">

<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>

<div class="row ">
	<div class="col-md-4 articleList_container" >
		<h1>Artikelen</h1>
		<a onclick="makeNew()">nieuw artikel toevoegen</a>
		<div class="articleList" id="articleList">
			hier komt een lijstje met alle artikelen
		</div>

	</div>
	<?php


 echo "
	<div class='col-md-8' id='add'>
		<h3>Artikel toevoegen</h3>
		<form method='POST' action='../model/newArticle.php' enctype='multipart/form-data'>
		<input type='text' placeholder='title' name='smalltitle'>
		<input type='text' placeholder='samenvating tekst' name='smallsummary'>
		 <p>single image upload</p>
        <input type='file' name='filess[]' accept='image/*'>
        <br>
		<input type='text' placeholder='titel' name='bigtitle'>
		<input type='text' placeholder='grote tekst' name='bigsummary'>
		 <p>Multiple image upload</p>
        <input type='file' name='files[]' multiple='multiple' accept='image/*'>
        <br><br>

		<input type='text' placeholder='author' name='author'>
		<input type='button' value='annuleren'>
		<input type='submit' value='toevoegen'>
		</form>
	</div>
		<div class='col-md-8' id='edit'>
		
		</div>";
	?>

</div>

       
       


</body>
</html>
<script type="text/javascript">
 swal({ 
    title: "Welkom <?php echo $_SESSION['login_user']?>!",
    html: true,
    timer:1250

});


window.addEventListener('load', function() {
     
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("articleList").innerHTML = xhttp.responseText;
            }
        };
        xhttp.open("GET", "../model/getArticles_names.php", true);
        xhttp.send();
    // var clicked = document.getElementById("").click
}, false);


	function clickevent(clicked) {
	getData(clicked);
}
	function makeNew() {
			$("#edit").fadeOut(500);		
            // $("#add").fadeIn(500);
            setTimeout(function(){$("#add").fadeIn(500);}, 500);
};    


     function getData(clicked) {
            $("#add").fadeOut(500);
             $("#edit").fadeIn(500);

            setTimeout(function(){$("#edit").fadeIn(500);}, 500);
            	
     	  var xhttp = new XMLHttpRequest();
         xhttp.onreadystatechange = function() {
             if (this.readyState == 4 && this.status == 200) {
                 document.getElementById("edit").innerHTML = xhttp.responseText;
             }
         };
         xhttp.open("GET", "../model/retrieveArticles.php?clicked=" + clicked, true);
         xhttp.send();
        console.log(clicked);
     };



</script>

<?php  
}else{
   		header("Location: index.php");
	} ?>