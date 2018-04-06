<?php

require '../vendor/autoload.php';




$url1 = $url2 = 'noe';
if (isset ($_GET['id1'])){
    $id1 = $_GET['id1'];

}

$urlImg = 'https://akabab.github.io/superhero-api/api/images/md/';
$heroManager = new App\HeroManager();
$heroManager->selectById(13);

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

    <div class="row mb-5 mt-5">
        <div class="col-3"><img class="img-fluid" src="
            <?php if(!empty($_GET['id1'])): ?>
                <?= $heroManager->selectById($_GET['id1'])->images->md ; ?>">
            <?php else :?>
                <?= 'generique.jpg';?>">
            <?php endif; ?>
        </div>
        <div class="col-6 text-center">
            <img class="img-fluid" src="https://static.comicvine.com/uploads/original/8/84424/5095081-6043063200-stick.png">
        </div>
        <div class="col-3">
            <img class="img-fluid" src="generique.jpg">
        </div>
    </div>
        <div class="row mb-5 mt-5">
            <div class="col-3 text-center">
                <h4><?= $heroManager->selectById($_GET['id1'])->name ?></h4>
            </div>
            <div class="col-6 text-center"></div>
            <div class="col-3 text-center">
                <h4>choose your player</h4>
            </div>
        </div>
</main>
<div class="container">
    <div class="row mt-5 zoom">
        <?php for($i=1;$i<7;$i++): ?>
            <div class="col-2">
                <a href="index3.php?id1=<?= $id1;?>&id2=<?= $i; ?>">
                    <img class="img-fluid" class="jpg" src="<?= $heroManager->selectById($i)->images->md; ?>" width="100%">
                </a>
            </div>
        <?php endfor; ?>


    </div>
    <div class="row mt-5 ">
        <div class="col-12 text-center">
            <h1>choose your player</h1>
        </div>

    </div>

</div><!-- /.container -->

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
