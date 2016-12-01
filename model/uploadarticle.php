<?php


REQUIRE "../includes/config.php";


$title   = $_POST["title"];
$content = $_POST["content"];
// $img     = $_POST["fileupload"];
$author  = $_POST["author"];

 $title . $content . $author;

echo "<br><br>";


// echo $img;






$target_dir = "../uploads/";
$date = date("Y-m-d-H-i-s");
$target_file = $target_dir . $date .'_'.basename($_FILES["fileupload"]["name"]);

$profilepicture = $_FILES["fileupload"]["name"];
 
$newfilename = $date."_".$profilepicture;



$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileupload"]["tmp_name"]);
    echo $_FILES["fileupload"]["tmp_name"];
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileupload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file)) {

        // $sql = "INSERT INTO users (profilepicture) VALUES ('$profilepicture')";
        // $mysqli->query($sql);

        // $sql = "INSERT INTO articles (img) VALUES ('$img')";

        

        $sql = "INSERT INTO articles (title,content,img,date,author)
VALUES ('$title','$content','$newfilename','$date','$author')";
		$mysqli->query($sql);

       
        echo "The file ". basename( $_FILES["fileupload"]["name"]). " has been uploaded.";

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


?>







