<?php
session_start(); 


   
include "../includes/config.php";
      
      $myusername = mysqli_real_escape_string($mysqli,$_POST['username']);
      // echo $myusername;
      $mypassword = mysqli_real_escape_string($mysqli,$_POST['password']); 
      
      $sql = "SELECT * FROM users WHERE username = '$myusername' and password = '$mypassword'";
      // echo $result;  
      $result = mysqli_query($mysqli,$sql);  
      $row = $result->fetch_array(MYSQLI_ASSOC);
      // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         // session_register("myusername");
         $_SESSION['login_user'] = $row["username"];
         header("location: ../index.php?page=admin");
      }else {
         header("location: ../index.php?page=admin");
      }
   
?>