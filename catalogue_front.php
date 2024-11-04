<?php
require_once("catalogue.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="catalogue.css">
    <title>Catalogue</title>
</head>
<h1>Listes des films</H1>
<h3>Retrouver tous les films disponibles</h3>
<body>
    <p class="liste">
    <?php
        for($i=0;$i<count($liste); $i++){
            echo
            "Titre :".$liste[$i]["title"]."<br>"."<br>".
            "Année :".$liste[$i]["year"]."<br>"."<br>".
            "Synopsis :".$liste[$i]["synopsis"]."<br>"."<br>".
            "Réalisateur :".$liste[$i]["director"]."<br>".
            "Date création :".$liste[$i]["created-at"]."<br>"."<br>".
            "Date supression :".$liste[$i]["deleted-at"]."<br>"."<br>".
            "Genre :".$liste[$i]["genre"]."<br>"."<br>";
        }
    ?>
    </p>
</body>
</html>