<?php

require '../vendor/autoload.php';
require '../src/function.php';
$urlImg = 'https://akabab.github.io/superhero-api/api/images/md/';
$heroManager = new App\HeroManager();
$heroManager->selectById(13);


$url1 = $url2 = 'noe';
if (isset ($_GET['id1'])){
    $id1 = $_GET['id1'];
    $url1 = $heroManager->selectById($id1)->images->md;
}

if (isset ($_GET['id2'])){
    $id2 = $_GET['id2'];
    $url2 = $heroManager->selectById($id2)->images->md;
}

$life1 = $_GET['pv1'];
$life2 = $_GET['pv2'];
$start = $_GET['start'];


if(isset($_GET['attack'])) {
    $attack = $_GET['attack'];
}else {
    $attack = 0;
}

if ($start == 1) {
//    $life2 = attaque($life2,$attack);
    $life2 = attack($life2);
    $start = 2;
} elseif ($start == 2) {
//    $life1 = attaque($life1,$attack);
    $life1 = attack($life1);
    $start = 1;
}


if($life1 <= 0 || $life2 <=0) {
    if ($life1 <= 0) {
        $winId = $_GET['id2'];
     header("Location:win.php?id=" . $winId);
    } elseif ($life2 <= 0) {
        $winId = $_GET['id1'];
     header("Location:win.php?id=" . $winId);
    }
}





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
        <div class="col-3"><img class="img-fluid" <?php if($_GET['start'] == 1) { echo "style='box-shadow: 1px 1px 30px red' ";} ?> src="
            <?php if(!empty($_GET['id1'])): ?>
                <?= $heroManager->selectById($_GET['id1'])->images->md ; ?>">
            <?php else :?>
                <?= 'generique.jpg';?>">
            <?php endif; ?>
        </div>
        <div class="col-6 text-center"><img class="img-fluid"  src="https://static.comicvine.com/uploads/original/8/84424/5095081-6043063200-stick.png"></div>
        <div class="col-3"><img class="img-fluid" <?php if($_GET['start'] == 2) { echo "style='box-shadow: 1px 1px 30px blue' ";} ?> src="
            <?php if(!empty($_GET['id1'])): ?>
                <?= $heroManager->selectById($_GET['id2'])->images->md ; ?>">
            <?php else :?>
                <?= 'generique.jpg';?>">
            <?php endif; ?>
        </div>
    </div>
    <div class="row mb-5 mt-5">
        <div class="col-3 text-center"><h5><?= $heroManager->selectById($_GET['id1'])->name ?></h5><div class="liveborder mb-2"><div class="live " style="width: <?= $_GET['pv1']; ?>%"></div></div><h5>VIE : <?= $_GET['pv1']; ?></h5></div>
        <div class="col-6 text-center"></div>
        <div class="col-3 text-center"><h5><?= $heroManager->selectById($_GET['id2'])->name ?></h5><div class="liveborder mb-2"><div class="live " style="width: <?= $_GET['pv2']; ?>%"></div></div><h5>VIE : <?= $_GET['pv2']; ?></h5></div>
    </div>
    <div class="row mb-5 mt-5">
        <div class="col-3 ">
            Brain :<?= $heroManager->selectById($_GET['id1'])->powerstats->intelligence; ?><br>
            Strength :<?= $heroManager->selectById($_GET['id1'])->powerstats->strength; ?><br>
            Speed :<?= $heroManager->selectById($_GET['id1'])->powerstats->speed; ?><br>
            Durability :<?= $heroManager->selectById($_GET['id1'])->powerstats->durability; ?><br>
            Power :<?= $heroManager->selectById($_GET['id1'])->powerstats->power; ?><br>
            Combat :<?= $heroManager->selectById($_GET['id1'])->powerstats->combat; ?><br>

        </div>
        <div class="col-6 text-center">
            <div class="row">
                <div class="col-3">
                    <a href="/public/fight.php?id1=<?= $_GET['id1']; ?>&id2=<?= $_GET['id2']; ?>&pv1=<?= $life1; ?>&pv2=<?= $life2; ?>&start=<?= $start; ?>&attack=1"><img src="https://image.noelshack.com/fichiers/2018/14/5/1523006631-sort.png" style="width:120px; height:120px;"></a>
                </div>
                <div class="col-3">
                    <a href="/public/fight.php?id1=<?= $_GET['id1']; ?>&id2=<?= $_GET['id2']; ?>&pv1=<?= $life1; ?>&pv2=<?= $life2; ?>&start=<?= $start; ?>&attack=2"><img src="https://image.noelshack.com/fichiers/2018/14/5/1523006637-sort2.png" style="width:120px; height:120px;"></a>

                </div>
                <div class="col-3">
                    <a href="/public/fight.php?id1=<?= $_GET['id1']; ?>&id2=<?= $_GET['id2']; ?>&pv1=<?= $life1; ?>&pv2=<?= $life2; ?>&start=<?= $start; ?>&attack=3"><img src="https://image.noelshack.com/fichiers/2018/14/5/1523006631-sort.png" style="width:120px; height:120px;"></a>

                </div>
                <div class="col-3">
                    <a href="/public/fight.php?id1=<?= $_GET['id1']; ?>&id2=<?= $_GET['id2']; ?>&pv1=<?= $life1; ?>&pv2=<?= $life2; ?>&start=<?= $start; ?>&attack=4"><img src="https://image.noelshack.com/fichiers/2018/14/5/1523006637-sort2.png" style="width:120px; height:120px;"></a>
                </div>
            </div>
        </div>
        <div class="col-3 ">
            Brain :<?= $heroManager->selectById($_GET['id2'])->powerstats->intelligence; ?><br>
            Strength :<?= $heroManager->selectById($_GET['id2'])->powerstats->strength; ?><br>
            Speed :<?= $heroManager->selectById($_GET['id2'])->powerstats->speed; ?><br>
            Durability :<?= $heroManager->selectById($_GET['id2'])->powerstats->durability; ?><br>
            Power :<?= $heroManager->selectById($_GET['id2'])->powerstats->power; ?><br>
            Combat :<?= $heroManager->selectById($_GET['id2'])->powerstats->combat; ?><br>
        </div>
    </div>
</main>
<div class="container">
    <div class="row mt-5 ">



    </div>
    <div class="row mt-5 ">
        <div class="col-12 text-center">

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
