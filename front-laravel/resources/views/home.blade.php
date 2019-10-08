@extends('template')

@section('titre')
Home
@endsection

@section('contenu')
<div class="col-sm-12" style="padding-left: 0px; padding-right: 0px;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:0px; margin-bottom: 20px;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/dragon.jpg" alt="Los Angeles">
      </div>

      <div class="item">
        <img src="images/dragon.jpg" alt="Chicago">
      </div>

      <div class="item">
        <img src="images/dragon.jpg" alt="New York">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Dernières News -->
<div class="col-sm-12">
  <h2>Dernières News</h2>
  <div class="col-sm-2">
  </div>
  <div class="col-sm-8">
    <?php for($keyArticle = 0; $keyArticle < 3; $keyArticle++) {
      $article = $lastArticles[$keyArticle]; ?>
      <div class="col-sm-12" style="border:2px solid white; margin-bottom: 20px; padding-bottom: 10px;">
        <h3><?= $article->title ?></h3>
        <?= $article->abstract ?>
        <?php unset($lastArticles[$keyArticle]); ?>
      </div>
    <?php } ?>
  </div>
  <div class="col-sm-2">
  </div>
</div>

<!-- Meilleur Aventure -->
<div class="col-sm-12">
  <h2 style="text-align: center;">Aventure à l'honneur</h2>
  <div class="col-sm-6">
    <h3 style="text-align: center;">Aventure la mieux notée</h3>
    <div class="col-sm-12" style="border:2px solid white; margin-bottom: 20px; padding-bottom: 10px;">
      <h4><?= $bestAdventures->bestGradeAdventure->title ?></h4>
      <p>Résumé : <?= $bestAdventures->bestGradeAdventure->abstract ?></p>
      <p>Auteur : <?= $bestAdventures->bestGradeAdventure->author ?></p>
      <p>Note : <?= $bestAdventures->bestGradeAdventure->average ?></p>
      <p>Jouée <?= $bestAdventures->bestGradeAdventure->timePlayed ?> fois</p>
    </div>
  </div>
  <div class="col-sm-6">
    <h3 style="text-align: center;">Aventure la plus jouée</h3>
    <div class="col-sm-12" style="border:2px solid white; margin-bottom: 20px; padding-bottom: 10px;">
      <h4><?= $bestAdventures->mostPlayedAdventure->title ?></h4>
      <p>Résumé : <?= $bestAdventures->mostPlayedAdventure->abstract ?></p>
      <p>Auteur : <?= $bestAdventures->mostPlayedAdventure->author ?></p>
      <p>Note : <?= $bestAdventures->mostPlayedAdventure->average ?></p>
      <p>Jouée <?= $bestAdventures->mostPlayedAdventure->timePlayed ?> fois</p>
  </div>
</div>

<!-- News récentes -->
<div class="col-sm-12" style="margin-top: 20px;">
  <div class="col-sm-6">
  </div>
  <div class="col-sm-6" style="border:2px solid white; margin-bottom: 20px; padding-bottom: 10px;">
    <h3>News Récentes</h3>
    <?php foreach ($lastArticles as $article) { ?>
      <div class="col-sm-12">
        <p><?= $article->title ?><p>
      </div>
    <?php } ?>
  </div>
</div>
@endsection