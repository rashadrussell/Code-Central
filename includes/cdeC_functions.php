<?php
require_once(dirname(__DIR__) . "/" . 'includes/' . 'cdeC_load.php');

function getUsers() {
    global $cdeCdb;

    $result = $cdeCdb->query('SELECT * FROM users');
    
    while($rows = mysql_fetch_array($result)) {
        echo $rows['firstname'] . ' ' . $rows['lastname'];
        echo '<br />';
    }
}

function quickNav() {
    global $cdeCdb;
    
    $result = $cdeCdb->query('SELECT * FROM pages');
    
    while($rows = mysql_fetch_array($result)) {
        if($rows['id'] == 1) {
            echo '<li><a href="./">' . $rows['linkTitle'] . '</a></li>'; 
        } else {
            echo '<li><a href="main.php?pid=' . $rows['id'] . '">' . $rows['linkTitle'] . '</a></li>';
          }
        }
}

function getBody() {
    global $cdeCdb;
    
    $pid = $_GET['pid'];
    
    $result = $cdeCdb->query("SELECT body FROM pages WHERE id='$pid' LIMIT 1");
    
    while($rows = mysql_fetch_array($result)) {
        echo $rows['body'];
    }
    
}

function getTitle() {
    global $cdeCdb;
    
    $pid = $_GET['pid'];
    
    $result = $cdeCdb->query("SELECT title FROM pages WHERE id='$pid' LIMIT 1");
    
    while($rows = mysql_fetch_array($result)) {
        echo '| ' . $rows['title'];
    }
    
}

 

?>