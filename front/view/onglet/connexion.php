<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/connexion.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Connexion</title>
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
                <h2 style="text-align: center;">Connexion</h2>
                <form action="">
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="email" class="form-control" id="email" placeholder="Adresse email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Mot de passe :</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Mot de passe" name="pwd">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="remember"> Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-default">Valider</button>
                </form>
            </div>

            <div class="col-lg-4">
            </div>
        </div>
    </div>
</body>
</html>