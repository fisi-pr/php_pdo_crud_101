<?php

//Variablen für PDO Instanz

$dbHost = 'localhost';
$dbName = 'schule';
$dbuser = 'root';
$dbpw = '';

try {

    //PDO Objekt instanzieren
    new PDO("mysql:host=($dbHost);dbname=($dbName)", $dbuser, $dbpw);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $error) {
    
    echo $error->getMessage();

}