<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/accueil.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Page d'accueil</title>
</head>

<body>
    <?php
        include 'menu.php';
    ?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active img_carousel">
        <img src="../../images/dragon.jpg" alt="Los Angeles" class="img_carousel" style="heigth:100%;">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>

      <div class="item img_carousel">
        <img src="../../images/HEROIC FANTASY B.jpg" alt="Chicago" class="img_carousel">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
    
      <div class="item img_carousel">
        <img src="../../images/bandeau-renégats.jpg" alt="New York" class="img_carousel" style="heigth:40%;">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
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

    <div class="container">
        <div class="row">
          <a href="news.php">
            <div class="news col-lg-12">
              <img src="../../images/background.jpg" class="img_news">
              <div class="text_news">
                <h2>Titre de la news 1</h2>
                <p>qsjdhqsfisqi qsdgqsogqis qisdqidgqi</p>
              </div>
            </div>
          </a>

            <div class="news col-lg-12">
              <img src="../../images/background.jpg" class="img_news">
              <div class="text_news">
                <h2>Titre de la news 2</h2>
                <p>qsjdhqsfisqi qsdgqsogqis qisdqidgqi</p>
              </div>
            </div>
        </div>
    <div>

    <?php //$data = json_decode(file_get_contents ("http://localhost/LeSiteDontVousEtesLeHeros/back/news"), true); 
    //var_dump($data); ?>

    <?php //var_dump($data[0]); ?>

    <?php 
      // create curl resource
      //$ch = curl_init();
      // set url 
      //curl_setopt($ch, CURLOPT_URL, "http://localhost/LeSiteDontVousEtesLeHeros/back/news");
      // $output contains the output json
      //$output = curl_exec($ch);
      //var_dump($output);
      // close curl resource to free up system resources 
      //curl_close($ch);
      // {"name":"Baron","gender":"male","probability":0.88,"count":26}
      //var_dump(json_decode($output));
    ?>
</body>
</html>