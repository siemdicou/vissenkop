<?php
session_start(); 
 if (isset($_SESSION['login_user'])) {
		?>
<script type="text/javascript">
	var bla = "<?php echo $_SESSION['login_user']?>";
</script>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../sweetalert-master/dist/sweetalert.css">
<script src="../sweetalert-master/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
</head>
<body>

<div class="row">
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
</script>

<?php  
}else{
   		header("Location: index.php");
	} ?>