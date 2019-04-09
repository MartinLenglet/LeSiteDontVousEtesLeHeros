<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/choix_personnage.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script scr="../js/choix_personnage.js"></script>
    <title>Choix du personnage</title>
 
    <script>
        $(document).ready(function(){
            $("#perso1").mouseover(function() {
                $("#statPerso").show("slow");
            });
        });
        /*$(document).ready(function(){
            $("#perso1").mouseout(function() {
                $("#statPerso").hide("slow");
            });
        });
        $(document).ready(function(){
            $("#progress").mouseover(function() {
                $("#statPerso").show("slow");
            });
        });
        $(document).ready(function(){
            $("#btn_suppr").mouseover(function() {
                $("#statPerso").show("slow");
            });
        });*/
    </script> 
     

</head>
<body>

    <?php
        include 'menu.php';
    ?>

    <div class="container">
        <div class="row">
            <div id="perso1" class="col-lg-5 perso">
                <div id="statPerso" class="statPerso">

                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="40"
                        aria-valuemin="0" aria-valuemax="100" style="width:40%; background-color:red">
                            <span class="sr-only">70% Complete</span>
                            Force
                        </div> 
                    </div>
                    
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70"
                        aria-valuemin="0" aria-valuemax="100" style="width:70%; background-color:green">
                            <span class="sr-only">70% Complete</span>
                            Habilité
                        </div>
                    </div> 
                    
                    
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="30"
                        aria-valuemin="0" aria-valuemax="100" style="width:30%; background-color:blue">
                            <span class="sr-only">70% Complete</span>
                            Robustesse
                        </div>
                    </div> 
                    
                    
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60"
                        aria-valuemin="0" aria-valuemax="100" style="width:60%; background-color:purple">
                            <span class="sr-only">70% Complete</span>
                            Intelligence
                        </div>
                    </div> 
                    
                    <div class="textPerso">
                        <h2>Nom du personnage</h2>
                    </div>

                    <button type="button" class="btn_suppr btn btn-danger btn-block">Supprimer</button> 
                </div>
            </div>
            <div class="col-lg-2">
            </div>
            <div class="col-lg-5 perso">
            </div>
        </div>

        <h1>Sélection du personnage</h1>
    </div>
    
</body>
</html>