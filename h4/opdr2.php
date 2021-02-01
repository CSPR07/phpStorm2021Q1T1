<?php

function getalisdeelbaardoor3($a){
    if ($a % 3 == 0){
        $a = true;
        echo "Getal is deelbaar door 3";
    } else{
        $a = false;
        echo "Getal is niet deelbaar door 3";
    }
}
getalisdeelbaardoor3(3);