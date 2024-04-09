<?php 

function transform($chaine){
    $table = str_split($chaine, "=");
    return [$table[0] => $table[1]];
}


function filterAllStudent($data){
    
    $path = PATH_DATA."/apprenant.json";
    $apprenants = readJsonFile($path);

    if ($data == "") {
        return $apprenants;
    }

    $filt = array(); 
    $result = array();
    $filter = explode(",", $data);  
    if(gettype($filter) === "array"){
        foreach($filter as $ft){
            $tb = explode("=", $ft);
            $filt[$tb[0]] = $tb[1];
        }
    }

    // On recupére le nombre de filtre a appliquer
    $nbk = sizeof(array_keys($filt));
    
    foreach($apprenants as $app){
        $nb = 0;
        
        foreach($filt as $k => $v){
            if(strtolower($app[$k]) == strtolower($v)) $nb++;
        }

        if($nbk == $nb)
            $result[] = $app;
    }

    return $result;

} 
