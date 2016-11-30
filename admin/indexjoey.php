<?php 




?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="../model/uploadarticle.php" method="POST" enctype="multipart/form-data">

<input type="text" name="title" value="title">
<input type="text" name="content" value="content">
<input type="text" name="author" value="author">

<input type="file" name="fileupload" id="fileupload">

<input type="submit" value="submit" name="submit">

</form>

</body>
</html>