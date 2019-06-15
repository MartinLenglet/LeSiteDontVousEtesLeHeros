<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/creation_perso.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Création de personnage</title>
</head>
<body>
    <?php 
        include "menu.php"
    ?>

    <div class="container">
        <div class="titre">
            <h2>Formulaire de création de personnage</h2>
        </div>
        
        <form>
            <div class="question">
                <p>Un troll détruit la table sur laquelle vous aviez posé votre choppe de bière pleine :</p>
                <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                        <label class="form-check-label" for="gridRadios1">
                            Je sors ma hache et me prépare une salade de troll
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                            Je lui lance ma meilleure boule de feu en espérant le brûler lui et toute sa famille
                        </label>
                    </div>
                    <div class="form-check disabled">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
                        <label class="form-check-label" for="gridRadios3">
                            Je préfère le thé
                        </label>
                    </div>
            </div>

            <div class="question">
                <p>Un troll détruit la table sur laquelle vous aviez posé votre choppe de bière pleine :</p>
                <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                        <label class="form-check-label" for="gridRadios1">
                            Je sors ma hache et me prépare une salade de troll
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                            Je lui lance ma meilleure boule de feu en espérant le brûler lui et toute sa famille
                        </label>
                    </div>
                    <div class="form-check disabled">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
                        <label class="form-check-label" for="gridRadios3">
                            Je préfère le thé
                        </label>
                    </div>
            </div>

            <div class="question">
                <p>Un troll détruit la table sur laquelle vous aviez posé votre choppe de bière pleine :</p>
                <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                        <label class="form-check-label" for="gridRadios1">
                            Je sors ma hache et me prépare une salade de troll
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                            Je lui lance ma meilleure boule de feu en espérant le brûler lui et toute sa famille
                        </label>
                    </div>
                    <div class="form-check disabled">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
                        <label class="form-check-label" for="gridRadios3">
                            Je préfère le thé
                        </label>
                    </div>
            </div>
        </form>
    </div>
    
</body>
</html>