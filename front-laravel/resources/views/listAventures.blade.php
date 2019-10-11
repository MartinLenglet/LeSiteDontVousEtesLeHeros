@extends('template')

@section('titre')
Toutes les aventures
@endsection

@section('contenu')
<div class="col-sm-1">
</div>
<div class="col-sm-10">
    <h2 style="text-align: center; margin-top: 50px; margin-bottom: 50px;">Toutes les Aventures</h2>
    <?php foreach ($allAdventures as $adventure) {?>
        <div class="col-sm-4">
            <div class="col-sm-12" style="border:2px solid white; margin-bottom: 20px; padding-bottom: 10px;">
                <h4><?= $adventure->title ?></h4>
                <p>Résumé : <?= $adventure->abstract ?></p>
                <p>Auteur : <?= $adventure->author ?></p>
                <p>Note : <?= $adventure->average ?></p>
                <p>Jouée <?= $adventure->timePlayed ?> fois</p>
            </div>
        </div>
    <?php } ?>
</div>
<div class="col-sm-1">
</div>
@endsection