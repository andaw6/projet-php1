<?php
include_once ROOT."/app/models/promotion.php";

// On déclara le tableau des views
$views = [
    "p1" => "promotion",
    "p2" => "add-promo1",
    "p3" => "add-promo2"
];
// On déclare un tableau pour réinitialiser 
$reset = ["libelle" => "", "debut" => "", "fin" => ""];

// On s'assure d'avoir le même nombre de nombre dans le fichier de 
// configuration et dans le fichier de stockage des promotions
if($config["nb-promo"] != count($datas))
    $config["nb-promo"] = count($datas);
// On récupére le nombre de promotion
$nbPromo = $config["nb-promo"];

// On vérifie si la view qu'on a mis dans le fichier de configuration existe ou pas
if(!in_array($config["view"], $views)) $config["view"] = $views["p1"];

// On récupére la requête pour le chargement d'une view
$pg = $_REQUEST["pg"];
if(isset($pg)){
    if(array_key_exists($pg, $views)){
        $redirection = true;
        $config["view"] = $views[$pg];
        if($pg == "p1") $config["sauve"] = $reset;
    }
}

// On récupére la requête de filtration
$filter= $_REQUEST["filter"];
if(isset($filter)){
    $datas = filterPromo($filter);
    $config["filter"] = $filter;
    $actualPage = 0;
}

// On récupére la requête pour créer un promotion
$create = $_REQUEST["ap"];
if(isset($create)){
    $redirection = true;
    switch ($create) {
        // Quand on veut créer une promotion sans ajouter une ou des référentiel(s)
        case 'creer':
            if(addPromo($_REQUEST)){
                $config["view"] = $views["p1"];
                $datas = findAll("promotion");
                $config["sauve"] = $reset;
            }
            break;
        // Quand on veut créer une promotion en ajoutant une ou des référentiel(s)
        case 'ajout':
            if(isset($_REQUEST) && isset($_REQUEST) && isset($_REQUEST)){
                $config["sauve"] = $_REQUEST;
                $config["view"] = $views["p3"];
            }
            break;
        // On créer une promotion en ajoutant une ou des référentiels
        case 'creer-ajout':
            if(addPromo($config["sauve"], getPromoByQuery($_REQUEST))){
                $config["sauve"] = $reset;
                $config["view"] = $views["p1"];
                $datas = findAll("promotion");
            }
            break;
        // Quand on veut retourner en arrière pour modifier le donnée pour le nouveau promotion
        case 'back':
            $config["view"] = $views["p2"];
            break;
    }
}


// On récupére les éléments sur la pagination
$rst = paginer($actualPage, $nbItems, $lenght_data);
$actualPage = $rst["ap"];
$redirection = $rst["rd"];
$nbItems = $rst["nbi"];

// On met à jour les nouvelles donnée
configuration("promotion", $config);

// On récupére le dernier filtre pour l'afficher
$filter = $config["filter"];

// Quand on veut redirigé la page
if($redirection){
    redirection($PAGE);
    $redirection = false;
}

// On récupére la taille du tableau
$lenght_data = sizeof($datas);

// On récupére l'intervale de l'élément qu'on veut afficher
$start = $actualPage * $nbItems;
$end = $start + $nbItems;
if($end>$lenght_data) $end = $lenght_data;


// On récupére les éléments a afficher dans une interval donnée
$datas = getElementByInterval($datas, $start, $end);
// On vérifie s'il y a des éléments dans le tableau pour ajouter 1 à start
if(sizeof($datas)) $start++;

// On recupére la view qu'on veut afficher
$view = $config["view"];


// On recupére les donnée pour la création d'une promotion qui on était sauvegarder
$libelle = $config["sauve"]["libelle"];
$debut = $config["sauve"]["debut"];
$fin = $config["sauve"]["fin"];

// On inclut la view pour les promotions
include PATH_FILE."/layouts/layout.html.php";
?>