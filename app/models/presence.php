<?php 

function getReferentielName($id){
    return findAll("referentiel", ["id"=> $id])[0]["libelle"];
}



// Fonction qui permet de récupérer les présences 
function filterPresence($datas, $filter){

    if(isset($filter["status"]) && isset($filter["ref"])){
        $dateActuel = isset($filter["calendar"]) ? $filter["calendar"] : date('Y-m-d');
        $data_date = filter($datas, $dateActuel);
        // dd($data_date);

        $new_data = $datas;
        $status = $filter["status"];
        $ref = $filter["ref"];
        foreach($new_data as $etud){
            if($status == "" && $ref == ""){
                return $new_data();
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
        
        return $result;
    }

    // On retourne tout les présences si aucun filtre n'a été appliquer
    return $datas;
}



// Fonction qui permet de récupérer les présences 
function getPresence($promo){
    $apprenants = findAll("apprenant", ["promo"=>$promo]);
    $presences = filter(findAll("presence"), $promo."_");
    $result = [];
    
    foreach($apprenants as $app){
        // On associe les deux tableaux
        $result[] = array_merge($app, filter($presences, "matricule=".$app["matricule"])[0]);
    }

    return $result;
}