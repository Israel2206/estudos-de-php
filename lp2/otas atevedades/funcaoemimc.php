<?php

function imc_calculation($peso,$altura){
    $imc = $peso / ($altura*$altura);
    
    if ($imc > 18.5 && $imc <25) {
        echo"norma -> $imc";
    } else if ($imc >= 25 && $imc <30) {
        echo"sobre pesado -> $imc";
    }else if ($imc >30) {
        echo"gordasssssso! -> $imc";
    } else {
        echo"mago -> $imc";
    }
}

imc_calculation(69,1.83);