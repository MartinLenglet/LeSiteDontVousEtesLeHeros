@extends('template')

@section('titre')
Aperçu de l'aventure
@endsection

@section('contenu')
<div class="col-sm-1">
</div>
<div class="col-sm-7" style="border: solid white 3px;">
    <h2 style="text-align: center;">Mode Créateur : Aventure <?= $adventure->id ?></h2>
    <div class="col-sm-12" style="border: solid white 3px;">
      <h3>Nouvel Evénement :</h3>
      <form action="<?= action('EventController@create') ?>" method="POST">
        {{ csrf_field() }}
        <div class="form-group" hidden="hidden">
          <input name="adventure_id" value="<?= $adventure->id ?>">
        </div>
        <div class="form-group">
          <label for="textEvent">Texte de l'événement</label>
          <textarea class="form-control" name="textEvent" id="textEvent" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label for="typeEvent">Type de l'événement</label>
          <select class="form-control" id="typeEvent" name="typeEvent">
            <option>standard</option>
            <option>start</option>
            <option>end</option>
          </select>
        </div>
        <div class="form-group" style="text-align: right; color: black;">
          <input type="submit" value="Créer">
        </div>
      </form>
    </div>
</div>
<div class="col-sm-3">
    <div id="sigma-container" class="col-sm-12" style="height:500px; border: solid white 3px;"></div>
    <script src="../js/sigma.js/sigma.min.js"></script>
    <script src="../js/sigma.js/plugins/sigma.parsers.json.min.js"></script>
    <script>
    var data = <?= json_encode($adventure->tree) ?>

    // Initialize sigma:
      var s = new sigma(
        {
           renderer: {
             container: document.getElementById('sigma-container'),
             type: 'canvas'
           },
           settings: {}
         }
       );
       s.graph.read(data);
       s.refresh()
    </script>
</div>
<div class="col-sm-1">
</div>
@endsection