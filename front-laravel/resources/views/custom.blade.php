@extends('template')

@section('titre')
Aperçu de l'aventure
@endsection

@section('contenu')
<div class="col-sm-1">
</div>
<div class="col-sm-10">
    <div id="sigma-container" class="col-sm-12" style="height:500px; border: solid white 3px;"></div>
    <script src="../js/sigma.js/sigma.min.js"></script>
    <script src="../js/sigma.js/plugins/sigma.parsers.json.min.js"></script>
    <script>
    var data = <?= json_encode($adventure->tree) ?>

    console.log(data);

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