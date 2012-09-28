<?php
require_once('config/config.php');
//require_once('config/database.php');


function getUsers() {
    global $db;
    $db = new database('localhost', 'root',null, 'cde_Central');


    $result = $db->query('SELECT firstname FROM users WHERE id="1"');
    
    while($rows = mysql_fetch_array($result)) {
        echo $rows['firstname'];
    }
}

$a = 5;
global $b;
echo $b;

?>