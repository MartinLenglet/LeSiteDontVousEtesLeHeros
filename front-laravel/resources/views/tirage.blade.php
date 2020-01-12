@extends('template')

@section('titre')
Secret Santa
@endsection

@section('contenu')
<?php
    foreach ($tabTirage as $donneur => $receveur) {
        ?>
        <?= $donneur ?> offre son cadeau à <?= $receveur ?>
        <br>
        <?php
    }
?>
@endsection