
<?php
include "includes/config.php";
$page = (empty($_GET ['page'])) ? '' : $_GET['page'];
switch($page){
    case 'home':
    include "views/header.php";
    require 'model/getArticles.php';
    include "views/home.php";
        break;
            case 'about':
            include "views/header.php";
        include "views/about.php";
        break;
   case'works':
        include "views/header.php";
        include "views/work.php" ;
    break;
        
    case 'contact':
        include "views/header.php";
        include "views/contact.php";
    break;
    case 'articles':
        include "views/header.php";
        include "views/articles.php";
    break;
    case 'admin':
        include "admin/index.php";
    break;


    default:
        include "views/header.php";
        require 'model/getArticles.php';
        include "views/home.php";
    break;
}
include 'views/footer.php';
?>