<?php

$brojevi = [250, 330, 1000, 2000, 5000];
$popusti = [];

$ukupanPopust = 0;

function izracunajPopuste($brojevi, &$popusti, &$ukupanPopust) {
    $popust = 0.1;
    foreach($brojevi as $broj) {
        $popustBroja = $broj * $popust;
        array_push($popusti, $popustBroja);
    }

    $ukupanPopust = array_sum($popusti);
}

izracunajPopuste($brojevi, $popusti, $ukupanPopust);

var_dump($popusti);
echo $ukupanPopust;