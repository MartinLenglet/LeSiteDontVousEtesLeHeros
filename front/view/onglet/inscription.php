<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/inscription.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Inscription</title>
</head>
<body>
    <?php
        include 'menu.php';
    ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
            </div>

            <div class="col-lg-4 boite">
                <h2 style="text-align: center;">Inscription</h2>
                <form action="">
                    <div class="form-group">
                        <label for="pseudo">Pseudo :</label>
                        <input type="text" class="form-control" id="pseudo" placeholder="Pseudo" name="pseudo">
                    </div>
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="email" class="form-control" id="email" placeholder="Adresse email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Mot de passe :</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Mot de passe" name="pwd">
                    </div>
                    <button type="submit" class="validate btn btn-default center-block">Création de compte</button>
                </form>
            </div>

            <div class="col-lg-4">
            </div>
        </div>
    </div>
    
</body>
</html>