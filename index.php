
<?php
// dit include de files die niet via de switch worden geladen op de site.
include "includes/config.php";
include "views/header.php";

// include "controller/products.php";





// hier wordt de page en product id uit de url geladen
// zodat ze gebruikt kunnen worden in een van de files below

$page = (empty($_GET ['page'])) ? '' : $_GET['page'];
switch($page){
    case 'home':
    require 'model/getArticles.php';
    include "views/home.php";
        break;
            case 'about':
        include "views/about.php";
        break;
   case'works':
  
        include "views/work.php" ;
        break;
    case 'contact':
        include "views/contact.php";
        break;
    case 'articles':
    include "views/articles.php";
        break;
        case 'admin':
        include "admin/index.php";
        break;


    default:
    require 'model/getArticles.php';
    include "views/home.php";

        break;
}
include 'views/footer.php';
?>