<?php
require '../vendor/autoload.php';


$heroManager = new App\HeroManager();
var_dump($heroManager->selectById(13));
?>
<h1>Yollo</h1>
<?php for($i=1;$i<13;$i++): ?>
    <?php if($i == 9) {
        $i++;
    }else{
        $heroManager->selectById($i)->powerstats->intelligence;
    } ?>

<?php endfor; ?>

