<?php

// Fonction qui permet de filtrer les pomotions
function filterPromo($filter){

    $path = PATH_DATA."/promotion.json";
    $promos = readJsonFile($path);
    
    return filter($promos, $filter);
}