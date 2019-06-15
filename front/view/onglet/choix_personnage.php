<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/choix_personnage.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script scr="../js/choix_personnage.js"></script>
    <title>Choix du personnage</title>
</head>
<body>

    <?php
        include 'menu.php';
    ?>

    <div class="container">
        <div class="row">
            <div id="perso" class="col-lg-5 perso">
                <div class="imgPerso">
                    <img src="../../images/perso1.jpg">
                </div>    
                <div class="textPerso">
                    <h2>Nom du personnage</h2>
                </div>
                <button type="button" class="btnSuppr btn btn-danger btn-block">Supprimer</button> 
            </div>

            <div class="col-lg-2">
            </div>

            <div class="col-lg-5 perso">
                <div class="textPerso">
                    <h2>Création de personnage</h2>
                </div>
                <a href="creation_perso.php"><button type="button" class="btnAdd btn btn-primary btn-lg">Création</button></a>
            </div>
        </div>

        <h1>Sélection du personnage</h1>
    </div>
    
</body>
</html>