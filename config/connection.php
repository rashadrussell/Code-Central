<?php
/*
 Connecting to the database.
*/


define('HOSTNAME' , 'localhost');
define('USERNAME' , 'root');
define('PASSWORD' , '');
define('DATABASENAME' ,'cde_Central');

$con = @mysql_connect(constant('HOSTNAME'), constant('USERNAME'), constant('PASSWORD'));

if(!$con) {
    
    die("Could not connect to mysql: " . mysql_error());
    
} else {
        
    $seleDB = mysql_selectdb(constant('DATABASENAME'));

    if(!$seleDB) {
    
        die("Could not select database: " . mysql_error());
    
    } 
    
}


?>