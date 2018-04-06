<?php
/**
 * Created by PhpStorm.
 * User: wilder9
 * Date: 06/04/18
 * Time: 08:35
 */


function starter($speed1,$speed2){


    if ($speed1 > $speed2) {

        $res=1;

        }else{

        $res=2;

    }

    return $res;
}


function attack($lifeEnnemies)
{
    return $lifeEnnemies - (10 + rand(0,10)) ;
}

function attaque($lifeEnnemies ,$attack)
{
    if($attack == 1) {
        return $lifeEnnemies - 10;
    } elseif($attack == 2) {
        return $lifeEnnemies - 20;
    }elseif($attack == 3) {
        return $lifeEnnemies - 30;
    }elseif($attack == 4) {
        return $lifeEnnemies - 40;
    } else {
        return $lifeEnnemies;
    }
}