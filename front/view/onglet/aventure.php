<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/aventure.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Aventure</title>
</head>
<body>
    <?php
        include 'menu.php';
    ?>
    
    <img src="../../images/background.jpg" class="imgChapitre">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 contexte" hidden>
                <div class="resume">
                    <h4>Nom du chapitre</h4>
                    <p>Ici il y aura un court résumé du chapitre en cours, pour que le joueur sache où il en est si il reprend sa partie par exemple.</p>
                </div>
            </div>

            <div class="col-lg-2">
            </div>

            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12 textEvenement">
                        <p>Ceci est le texte de l'événement. C'est ici que se passe l'action principale qui va amener le joueur à faire des choix. Ces choix s'afficheront juste en dessous si le joueur remplis les conditions nécessaires.</p>
                        <p>Ce texte sera directement importé de la base de données au fur et à mesure. La mise à jour de cette page se fera en Ajax, afin d'éviter de longs temps de chargements après chaque événement.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-1">
                    </div>
                    <div class="col-lg-3 choix">
                        <p>Choix 1</p>
                    </div>
                    <div class="col-lg-4">
                    </div>
                    <div class="col-lg-3 choix">
                        <p>Choix 2</p>
                    </div>
                    <div class="col-lg-1">
                    </div>
                </div>
            </div>

            <div class="col-lg-2 profil" hidden>
                <div class="equipement">
                    <h4>Equipement</h4>
                    <div class="pieceEquipement">
                        Casque
                    </div>
                    <div class="pieceEquipement">
                        Torse
                    </div>
                    <div class="pieceEquipement">
                        Bottes
                    </div>
                </div>
                <div class="inventaire">
                    <h4>Sacoche</h4>
                    <div class="objet">
                        Corde
                    </div>
                    <div class="objet">
                        Potion
                    </div>
                    <div class="objet">
                        Potion
                    </div>
                    <div class="objet">
                        Potion
                    </div>
                    <div class="objet">
                        Potion
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>
</html>