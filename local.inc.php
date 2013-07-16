<?php
//database
define('LOCAL_DB_HOST', 'localhost');
define('LOCAL_DB_USER', 'root');
define('LOCAL_DB_PASS', 'pass');
define('LOCAL_DB_NAME', 'past_papers');
//define db tables
define('TABLE_STUDENTS', 'students');

//path
define('LOCAL_PATH_ROOT', 'home/use/projects/final-year-project');
define('LOCAL_PATH_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/test1/final-year-project' );
include('php/lib/functions.inc.php');
include('php/lib/database.inc.php');
include('php/lib/html.inc.php');
include('php/lib/constants.php');
?>