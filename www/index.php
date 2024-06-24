<?php
session_start();

$maintenance = false;
$debug = false;

ini_set('display_errors', $debug);
ini_set('display_startup_errors', $debug);
error_reporting(E_ALL);

if ($maintenance){
    header('Location: /app/maintenance/index.php');
}
else{
    header('Location: /app/index.php');
}

exit();