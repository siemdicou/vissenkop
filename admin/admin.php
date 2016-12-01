<?php
session_start(); 
 if (isset($_SESSION['login_user'])) {
		?>
<script type="text/javascript">
</script>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../sweetalert-master/dist/sweetalert.css">

<script src="../sweetalert-master/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>

<div class="row ">
	<div class="col-md-4 articleList_container" >
		<h1>Artikelen</h1>
		<div class="articleList" id="articleList">
			hier komt een lijstje met alle artikelen
		</div>

	</div>
	<div class="col-md-4">
		<h1>hallo</h1>
	</div>
	<div class="col-md-4">
		<h1>hallo</h1>
	</div>
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
        xhttp.open("GET", "model/getArticles_names.php", true);
        xhttp.send();
    // var clicked = document.getElementById("").click
}, false);


// 	function clickevent(clicked) {
// 	getData(clicked);
// }
//      function getData(cliked) {
//      	    var xhttp = new XMLHttpRequest();
//         xhttp.onreadystatechange = function() {
//             if (this.readyState == 4 && this.status == 200) {
//                 document.getElementById("hier komt nieuwe id").innerHTML = xhttp.responseText;
//             }
//         };
//         xhttp.open("GET", "nogNietBenoemed.php?cliked=" + cliked, true);
//         xhttp.send();
//      }
    

</script>

<?php  
}else{
   		header("Location: index.php");
	} ?>