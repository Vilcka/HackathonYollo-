<?php
require '../vendor/autoload.php';
require '../src/function.php';

$heroManager = new App\HeroManager();
?>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Album example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<main role="main" class="container">

<br><br>
<div class="row">
    <div class="col-3"></div>
    <div class="col-8">
        <img class="img-fluid" class="jpg" src="<?= $heroManager->selectById($_GET['id'])->images->lg; ?>" >
    </div>
</div>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-8">
        <p style="font-size:65px">WINNER !</p>
        </div>
    </div>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-8">
        <a href="index.php" style="text-align: center;">Retour</a>
        </div>
    </div>
</main><!-- /.container -->

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../../../assets/js/vendor/popper.min.js"></script>
<script src="../../../../dist/js/bootstrap.min.js"></script>
<script src="../../../../assets/js/vendor/holder.min.js"></script>
</body>
</html>
