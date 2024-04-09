<?php 



function filterAllStudent($data){
    
    $path = PATH_DATA."/apprenant.json";
    $apprenants = readJsonFile($path);
    
    if ($data == "") {
        return $apprenants;
    }

    $result = array();
    $filter = explode("=", $data);  

    if(sizeof($filter) == 2){
        foreach($apprenants as $app){
            if(strtolower($app[$filter[0]]) == strtolower($filter[1]))
                $result[] = $app;
        }
    }else{
        foreach($apprenants as $app){
            foreach($app as $val){
                if(stripos(strtolower($val), strtolower($data)) !== false){
                    $result[] = $app;
                    break;
                }
            }
        }
    }

    return $result;
} 
