<?php

// ob_start();
// session_start();

// db properties
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','vissenkop');


// make a connection to mysql here
    $mysql_hostname = "localhost";

    /*** mysql username ***/
    $mysql_username = "root";

    // ** mysql password **
    $mysql_password = "";

    /*** database name ***/
    $mysql_dbname = "vissenkop";


//  Databasegegevens online
// define('DBHOST','rdbms.strato.de');
// define('DBUSER','U2501887');
// define('DBPASS','Strible2016');
// define('DBNAME','DB2501887');

// make a connection to mysql here
    // $mysql_hostname = "rdbms.strato.de";

    /*** mysql username ***/
    // $mysql_username = "U2501887";

    /*** mysql password ***/
    // $mysql_password = "Strible2016";

    /*** database name ***/
    // $mysql_dbname = "DB2501887";

$mysqli = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

if ($mysqli->connect_errno) {
echo "Failed to connect to MySQL:
(" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}



?>
