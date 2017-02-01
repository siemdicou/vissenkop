<?php
include "../includes/config.php";

$datee = date("d-m-Y");

$smalltitle   	=  $_POST['kleinetitel'];
$smallsummary   =  $_POST['kleinesamenvatting']; 

$bigtitle   	=  $_POST['grotetitel']; 
$bigsummary  	=  $_POST['grotetekst'];

$subtitleone       =  $_POST['subtiteleen'];
$subsummaryone     =  $_POST['groteteksteen'];
$subtitletwo       =  $_POST['subtiteltwee'];
$subsummarytwo     =  $_POST['groteteksttwee'];
$subtitlethree     =  $_POST['subtiteldrie'];
$subsummarythree   =  $_POST['grotetekstdrie'];
$subtitlefour      =  $_POST['subtitelvier'];
$subsummaryfour    =  $_POST['grotetekstvier'];
$subtitlefive      =  $_POST['subtitelvijf'];
$subsummaryfive    =  $_POST['grotetekstvijf'];

 
$author  	 	=  $_POST['author']; 
$date = date("YmdHis");


$error=array();


if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){

$error=array();
$valid_formats = array("jpg", "png", "gif", "zip", "bmp", "JPG", "jpeg");
$max_file_size = 1024*6000; //100 kb
// $path = "http://www.joeysteffens.com/Jennybakker/uploads/";
$path = "../uploads/";
 // Upload directory
$count = 0;

$profilepicture = $_FILES["files"]["name"][0];


$newfilename = $date."_".$profilepicture;

    // Loop $_FILES to execute all files
    foreach ($_FILES['filess']['name'] as $f => $name) {     
        if ($_FILES['filess']['error'][$f] == 4) {
            continue; // Skip file if any error found
        }          
        if ($_FILES['filess']['error'][$f] == 0) {              
            if ($_FILES['filess']['size'][$f] > $max_file_size) {
                $message[] = "$name is too large!.";
                continue; // Skip large files
            }
            elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
                $message[] = "$name is not a valid format";
                continue; // Skip invalid file formats
            }
            else{ // No error found! Move uploaded files 

                $name_of_file=uniqid().".".$ext;
                move_uploaded_file($_FILES["filess"]["tmp_name"][$f], $path.$newfilename);
                    $count++; // Number of successfully uploaded files
            }
        }
    }
}



$photosarray = array();

extract($_POST);


$path = "../uploads/";

    $error=array();
    $extension=array("jpeg","jpg","png","gif");
    foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name)
            {
                $file_name=$_FILES["files"]["name"][$key];
                $file_tmp=$_FILES["files"]["tmp_name"][$key];
                $ext=pathinfo($file_name,PATHINFO_EXTENSION);
                if(in_array($ext,$extension))
                {
                    if(!file_exists($path."/".$file_name))
                    {
                        move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],$path."/".$file_name);

                        array_push($photosarray,$file_name);
                    }
                    else
                    {
                        $filename=basename($file_name,$ext);
                        $newFileName=$filename.time().".".$ext;
                        move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],$path."/".$newFileName);
                        array_push($photosarray,$newFileName);
                    }
                }
                else
                {
                    array_push($error,"$file_name, ");
                }
            }

$photos = serialize($photosarray);

$sql = "INSERT INTO articles (smalltitle,smallsummary,img,bigtitle,bigsummary,moreimg,datee,author,subtitleone,subsummaryone,subtitletwo,subsummarytwo,subtitlethree,subsummarythree,subtitlefour,subsummaryfour,subtitlefive,subsummaryfive)
VALUES ('$smalltitle','$smallsummary','$newfilename','$bigtitle','$bigsummary','$photos' ,'$datee' ,'$author', '$subtitleone' , '$subsummaryone', '$subtitletwo' , '$subsummarytwo', '$subtitlethree' , '$subsummarythree', '$subtitlefour' , '$subsummaryfour', '$subtitlefive' , '$subsummaryfive')";

$result = $mysqli->query($sql);

header("Location: ../admin/admin.php");

?>