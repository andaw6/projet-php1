<?php


// Fonction qui permet de lire les données d'un fichier json donnée
function readJsonFile($path){
    // On lit le contenu du fichier 
    $json_contenu = file_get_contents($path);

    // On deécode les données pour le stocker dans un tableau asociative
    $datas  = json_decode($json_contenu, true);

    // On vérifier si le décodage n'a pas réuissi on retourne un tableau vide
    if($datas === null)
        return array();
    
    // Sinon on retourne les données décodeer sous forme d'un tableau associative
    return $datas;   
}



// Fonction qui permet d'ajouter des données dans un fichier json donnée
function writeJsonFile($path, $data){

    // On encode le tableau mis à jour en json
    $new_datas = json_encode($data, JSON_PRETTY_PRINT);

    // On ajoute les nouvelles données dans le fichier json
    $result = file_put_contents($path, $new_datas);

    // On retourne le résultat
    if ($result !== false) {
        unset($result);
        return true; // Succès
    }
    unset($result);
    return false; // Échec 
}


// Fonction qui permet de retourner les éléments d'un tableau dans un intervalle donner
function getElementByInterval($array, $start, $end){
    $resultat = array();
    if($start < 0 || $start > $end || sizeof($array) == 0){
        return $resultat;
    } 
    foreach($array as $k => $arr){
        if($k>=$start && $k < $end){
            $resultat[] = $arr;
        }
    }
    return $resultat;
}


// Fonction qui permet de lire la configuration
function configuration($page, $data=null){
    $path = PATH_DATA."/config.json";
    $datas = readJsonFile($path);
    if ($data != null){
        $datas[$page] = $data;
        return writeJsonFile($path, $datas);
    }
    // On retourne la configuration pour les présences
    return $datas[$page];
}


// Fonction qui permet de récuperer les données d'une fichier donner
function findAll($page){
    $path = PATH_DATA . "/$page.json";
    return readJsonFile($path);
}


// Fonction pour la pagination
function paginer($actP, $nbI, $lenght){
    // Variable pour la redirection
    $redirect = false;

    // On vérifie si l'utilisateur a changer le nombre d'élément qu'il veut afficher
    if(isset($_POST["refresh"])){
        if(isset($_POST["nb_element"])){
            // On recupére le nombre d'élément qu'on veut afficher
            $nbI = intval($_POST["nb_element"]);
        }
    }
    
    // On récupére la requête pour le changement de page
    $pg = $_GET["cp"];

    if(isset($pg)){
        $redirect = true;    
        // On calcule le nombre de page qu'on peut afficher
        $last_page = intval($lenght / $nbI) - 1;
    
        switch (intval($pg)) {
            case 1: // S'il clique sur le premier boutton à gauche
                if($actP != 0)
                    $actP = 0;
                break;
            case 2: // S'il clique sur le deuxième boutton 
                if($actP != 0)
                    $actP--;
                break;
            case 3: // S'il clique sur le troisième boutton 
                if($actP < $last_page)
                    $actP++;
                break;
            case 4: // S'il clique sur le quatrième boutton
                if($actP < $last_page)
                    $actP = $last_page;
                break;
            default: break;
        }
    }


    // On retourne les résultats
    return [
        "ap" => $actP,
        "rd" => $redirect,
        "nbi" => $nbI 
    ];
}


?>