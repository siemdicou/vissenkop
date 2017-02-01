
<?php
// dit include de files die niet via de switch worden geladen op de site.
include "includes/config.php";


// include "controller/products.php";





// hier wordt de page en product id uit de url geladen
// zodat ze gebruikt kunnen worden in een van de files below

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
        include "views/header.php";
    case 'contact':
        include "views/contact.php";
        break;
        include "views/header.php";
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