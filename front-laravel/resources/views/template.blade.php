<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="../css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style> textarea { resize: none; } </style>
    <title>@yield('titre')</title>
</head>
<body>
    <nav class="navbar navbar-inverse" style="margin-bottom: 0px;">
    <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="<?= action('ArticleController@index') ?>">Le Site Dont Vous Êtes Le Héros</a>
        </div>
        <ul class="nav navbar-nav">
        <li><a href="<?= action('AventureController@index') ?>">Toutes les aventures</a></li>
        <li><a href="<?= action('EventController@show', ['id' => 1]) ?>">Test de l'Aventure 1</a></li>
        <li><a href="<?= action('AventureController@custom', ['id' => 1]) ?>">Mode créateur</a></li>
        <li><a href="#">Page 3</a></li>
        </ul>
    </div>
    </nav>
    @yield('contenu')
</body>
</html>