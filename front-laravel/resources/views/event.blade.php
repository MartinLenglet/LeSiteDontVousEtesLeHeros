@extends('template')

@section('titre')
Evenement
@endsection

@section('contenu')
<div class="col-sm-1">
</div>
<div class="col-sm-10">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-8">
        <h2 style="text-align: center; margin-bottom: 100px;"><?= $event->adventure->title ?></h2>
        <div class="col-sm-12" style="border: solid white 3px; text-align: center; margin-bottom: 100px; padding: 20px;">
            <?php // var_dump($event); die(); ?>
            <p><?= $event->text ?></p>
        </div>
        <?php 
            $choices = $event->choices;
            // $nbrChoices = count($choices);
            // count() ne fonctionne pas ici
            $nbrChoices = 0;
            foreach ($choices as $choice) {
                $nbrChoices++;
            }
            
            if ($nbrChoices != 0) {
                $colChoice = (int) floor(12 / $nbrChoices);
            } else {
                // Je ne sais pas ce que ça fait
                $colChoice = 0;
            }
            
            foreach ($choices as $choice) {
        ?>
        <div class="col-sm-<?=$colChoice?>">
            <a href="<?= action('EventController@show', ['id' => $choice->eventTo_id]) ?>">
                <div class="col-sm-12" style="border: solid white 3px; text-align: center; padding: 10px;">
                    <p><?= $choice->text ?></p>
                </div>
            </a>
        </div>
        <?php } ?>
        <?php // var_dump(url()->current()); ?>
    </div>
    <div class="col-sm-2">
    </div>
</div>
<div class="col-sm-1">
</div>
@endsection