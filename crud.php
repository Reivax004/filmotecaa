<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ajout.css">
    <title>Ajout</title>
</head>
<body>
    <div class="menu">
        <a href="index.html">ACCUEIL</a>
        <a href="catalogue.html">CATALOGUE</a>
        <a href="favoris">FAVORIS</a>
        <a href="crud.html">EDITION</a>
    </div>
    <div class="ajout">
        <h3>Ajouter un film : </h3>
        <form action="mod.php" method="post">
            <label for="">Titre du film : </label>
            <input type="text" name="titre" placeholder="Entrer le nom">
            <label for="">Année de sortie : </label>
            <input type="text" name="année">
            <label for="">Synopsis : </label>
            <input type="text" name="synopsis">
            <label for="">Director : </label>
            <input type="text" name="director">
            <label for="">Created-at : </label>
            <input type="date" name="created-at">
            <label for="">deleted-at : </label>
            <input type="date" name="deleted-at">
            <label for="">Genre : </label>
            <input type="text" name="genre">
            <button type="submit" name="ajouter">Ajouter</button>
        </form>
    </div>
    <div class="modifier">
        <h3>Modifer un film : </h3>
        <form action="mod.php" method="post">
        <label for="">Titre du film : </label>
            <input type="text" name="titrem" placeholder="Entrer le nom">
            <label for="">Date de sortie : </label>
            <input type="date" name="datem">
            <label for="">Synopsis : </label>
            <input type="text" name="synopsim">
            <label for="">Director : </label>
            <input type="text" name="directorm">
            <label for="">Created-at : </label>
            <input type="text" name="created-atm">
            <label for="">deleted-at : </label>
            <input type="text" name="delted-atm">
            <label for="">Genre : </label>
            <input type="text" name="genrem">
            <button>Modifier</button>
        </form>
    </div>
    <div class="supprimer">
        <h3>Supprimer un film : </h3>
        <form action="mod.php" method="post">
            <label for="">Nom du film : </label>
            <input type="text" name="titres" placeholder="Entrer le nom">
            <button type="submit" name="supprimer">Supprimer</button>
        </form>
    </div>
</body>
</html>