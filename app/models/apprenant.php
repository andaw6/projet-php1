<?php 


// Fonction qui permet de filtrer les apprenants
function filterAllStudent($filter){
    
    $path = PATH_DATA."/apprenant.json";
    $apprenants = readJsonFile($path);

    return filter($apprenants, $filter);  
} 


