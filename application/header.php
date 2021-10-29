<?php 

include 'config.php';


$bdd = NULL;

try {
    $bdd = new PDO('mysql:host=localhost;dbname='.$dbName,''.$login.'' , ''.$password.'');
    $connect =  true;
} catch (Exception $e) {

    $e->getMessage();
    $connect = false;
}

$isconnect = false;


if (isset($_SESSION['connect'])) {

    $isconnect = true;
} else {

    $isconnect = false;
}