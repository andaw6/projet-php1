<?php 

// FOnction qui permet de récuperer
function findAllPresence(){
    $path = PATH_DATA . "/presences.json";
    return readJsonFile($path);
}


function filterAllPresence($filter){
    $result = [];
    if(isset($filter["status"]) && isset($filter["ref"])){
        $status = $filter["status"];
        $ref = $filter["ref"];
        foreach(findAllPresence() as $etud){
            if($status == "" && $ref == ""){
                return findAllPresence();
            }
            else{
                if($status != "" && $ref != ""){
                    if($status == $etud["status"] && $ref == $etud["referentiel"])
                        $result[] = $etud;
                }
                if($status == "" && $ref != ""){
                    if($ref == $etud["referentiel"]){
                        $result[] = $etud;
                    }
                }
                if($status != "" && $ref == ""){
                    if($status == $etud["status"])
                        $result[] = $etud;
                }
                
            }
        }
        // On retourn le resultat du filtre
        return $result;
    }

    // On retourne tout les présences si aucun filtre n'a été appliquer
    return findAllPresence();
}


