<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/accueil.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Ajout d'une News</title>
    <script>
        $(document).ready(function(){
            $("#titre").keypress(function(){
                var titre = $("#titre").val();
                $("#titre_preview").val("titre");
                console.log(titre);
            });
        });
    </script>
</head>

<body>
    <?php
        include 'menu.php';
    ?>

    <div class="container">
        <!--Formulaire de création-->
        <h2>Ajout d'une nouvelle News</h2>
        <form action="/action_page.php">
        <div class="form-group">
            <label for="titre">Titre :</label>
            <input type="text" class="form-control" id="titre" placeholder="Titre de la News">
        </div>
        <div class="form-group">
            <label for="resume">Résumé :</label>
            <input type="text" class="form-control" id="resume" placeholder="Résumé de la News">
        </div>
        <div class="form-group">
            <label for="date">Date :</label>
            <input type="date" class="form-control" id="date" placeholder="Date de la News">
        </div>
        <div class="form-group">
            <label for="contenu">Contenu :</label>
            <textarea class="form-control" rows="10" id="contenu"></textarea>
        </div> 
        <button type="submit" class="btn btn-default">Valider</button>
        </form>

        <!--Visualisation-->
        <div>
            <h2>Pré-visualisation de la page</h2>
        </div>
        <div id="date_preview" style="text-align:right;">
            Date
        </div>
        <div id="titre_preview">
        </div>
        <div id="resume_preview">
        </div>
        <div id="contenu_preview">
        </div>
        
    </div>
</body>