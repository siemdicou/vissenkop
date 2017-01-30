<?php
// dit include de files die niet via de switch worden geladen op de site.
include "includes/config.php";
include "views/header.php";
// include "controller/products.php";





// hier wordt de page en product id uit de url geladen
// zodat ze gebruikt kunnen worden in een van de files below

$page = (empty($_GET ['page'])) ? '' : $_GET['page'];


// de switch gebruikt de informatie uit de links van de nav.php
// om zo de juiste files te include bij de juiste paginalink
switch($page){

    case 'home':
        break;
    case 'producten':
        break;
  
    case'work':
        include "views/work.php";
        break;
    case 'about':
        include "views/about.php";
        break;
    default:

        break;
}

