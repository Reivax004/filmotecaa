<?php

$pdo=new PDO('mysql:host='."localhost".';dbname='."filmoteca", "root", "root");

    $res=$pdo->prepare('SELECT * FROM film');
    $res->setFetchMode (PDO::FETCH_ASSOC) ;
    $res->execute() ;
    $liste=$res->fetchAll();

?>