<?php

    $server = 'localhost';
    $nameDb = 'gestion_notes';
    $login = 'root';
    $password = 'root';

    try{
        $conn = new PDO('mysql:host='.$server.';dbname='.$nameDb, $login, $password);
    }
    catch(PDOException $e){
        echo 'erreur de connexion à la bd '.$e->getMessage();
    }
?>