<?php
include_once ROOT."/app/models/promotion.php";

$views = [
    "p1" => "promotion",
    "p2" => "add-promo1",
    "p3" => "add-promo2"
];

// On vérifie si la view qu'on a mis dans le fichier de configuration existe ou pas
if(!in_array($config["view"], $views)) $config["view"] = $views["p1"];

$pg = $_REQUEST["pg"];
if(isset($pg)){
    if(array_key_exists($pg, $views)){
        $redirection = true;
        $config["view"] = $views[$pg];
    }
}

$filter= $_REQUEST["filter"];

// Les actions que l'utilisateur peut faire
if(isset($filter)){
    $datas = filterPromo($filter);
    $config["filter"] = $filter;
    $actualPage = 0;
}

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

// On inclut la view pour les promotions
include PATH_FILE."/layouts/layout.html.php";
?>