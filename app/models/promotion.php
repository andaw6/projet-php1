<?php

// Fonction qui permet de filtrer les pomotions
function filterPromo($filter){
    // Le chemin vers le fichier de stokage
    $path = PATH_DATA."/promotion.json";

    // On récupére la liste des promotions dans le fichier de stokage
    $promos = readJsonFile($path);
    
    // on retourne les données filtrer
    return filter($promos, $filter);
}


// Fonction qui permet d'ajouter un promotion
function addPromo($data, $refs=[]){
    // On vérifie si les données sont valide avant de créer une nouvelle promotion
    if(
        (isset($data["libelle"]) && !empty($data["libelle"]))
    && 
        (isset($data["debut"]) && !empty($data["debut"]))
    && 
        (isset($data["fin"]) && !empty($data["fin"]))
    ){
        $datas = findAll("promotion");
        $path = PATH_DATA."/promotion.json";
    
        $promo = [
            "status" => "desactive",
            "id" => "p".(sizeof($data) + 1),
            "libelle" => $data["libelle"],
            "debut" => $data["debut"],
            "fin" => $data["fin"],
            "referentiels" => $refs
        ];

        // On vérifie si le promo existe ou pas si vrai on ne l'ajoute pas
        if(promoExist($datas, $promo)) return false;
        
        // On ajoute la nouvelle promo dans le tableau de donnée
        $datas[] = $promo;

        // On retourne le resultat de l'ajoute d'une nouvelle promotion
        return writeJsonFile($path, $datas);
    }

    // On retourne faux si les données qui sont entre ne sont pas bonne
    return false;
}


// Fonction qui permet de récupérer la liste des références dans une requête
function getPromoByQuery($query){
    $result = [];
    // On parcours sur la liste des données pour récupé
    foreach($query as $key => $value){
        if(stripos($key, "ref-") !== false){
            $result[] = $value;
        }
    }
    // On retourne le résultat
    return $result;
}


// La fonction qui permet de vérifier si une promotion existe ou pas
function promoExist($promos, $promo){
    $result = false;

    // On parcours la liste des promotions pour faire une vérification
    foreach($promos as $pr){
        // On vérifie si on a une correspondance
        if(
            ($pr["libelle"] == $promo["libelle"])
        && 
            ($pr["debut"] == $promo["debut"])
        && 
            ($pr["fin"] == $promo["fin"])
        && 
            ($pr["status"] == $promo["status"])
        ){
            $result = true; // Quand on trouve une promotion correspond au promo donner
            break;
        }
    }   

    // On retourn le resultat
    return $result;
}
