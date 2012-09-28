<?php
// This is the Code Central Bootstrap file that loads all of the files that contains methods and functions used in the program.
//require_once('../config/config.php');
if(file_exists(dirname(__DIR__) . '/' . '../' . 'config/' . 'config.php')) {
require_once(dirname(__DIR__) . '/' . '../' . 'config/' . 'config.php');
} else {
    echo 'problem';
    echo dirname(__DIR__);
}

require_once('classes/cdeC_db.php');
require_cdeC_db();
require_once('cdeC_functions.php');

?>