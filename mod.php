<?php

$pdo=new PDO('mysql:host='."localhost".';dbname='."filmoteca", "root", "root");

if(isset($_POST["ajouter"])){


$titre = $_POST["titre"];
$année = $_POST["année"];
$synopsis = $_POST["synopsis"];
$director = $_POST["director"];
$created = $_POST["created-at"];
$deleted = $_POST["deleted-at"];
$genre = $_POST["genre"];


    $res=$pdo->prepare("INSERT INTO `film` (`title`,`year`,`synopsis`,`director`,`created-at`,`deleted-at`,`genre`) 
    VALUES('$titre','$année','$synopsis','$director','$created','$deleted','$genre')");
    $res->setFetchMode (PDO::FETCH_ASSOC) ;
    $res->execute() ;
    $liste=$res->fetchAll();
}
elseif(isset($_POST["supprimer"])){

$titres = $_POST["titres"];  
    
    $res=$pdo->prepare("DELETE FROM `film` WHERE `title` = :titres ");
    $res->bindValue(':titres',$titres);
    $res->setFetchMode (PDO::FETCH_ASSOC) ;
    $res->execute() ;
    $liste=$res->fetchAll();
}
elseif(isset($_POST["modifier"])){
    
$titrem = $_POST["titrem"];
$annéem = $_POST["annéem"];
$synopsism = $_POST["synopsism"];
$directorm = $_POST["directorm"];
$createdm = $_POST["created-atm"];
$deletedm = $_POST["deleted-atm"];
$genrem = $_POST["genrem"];

    $res=$pdo->prepare("UPDATE INTO `film` WHERE `title` = :titres ");
    $res->bindValue(':titres',$titres);
    $res->setFetchMode (PDO::FETCH_ASSOC) ;
    $res->execute() ;
    $liste=$res->fetchAll();

    
}

?>