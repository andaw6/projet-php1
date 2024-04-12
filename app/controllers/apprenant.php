<?php 
// Inclusion du model
include_once ROOT."/app/models/apprenant.php";
$datas["data"] = findAll("apprenant", ["promo" => $actualPromo]);
$nbApprenant = count($datas["data"]);
// dd($datas);

// On récupére les informations pour la pagination
$rst = paginer($actualPage, $nbItems, $lenght_data);
$actualPage = $rst["ap"];
$redirection = $rst["rd"];
$nbItems = $rst["nbi"];

// On vérifie si l'utilisateur veur restaurer la filtre
if(isset($_REQUEST["reset"])){
    dd($datas);
    $datas["data"] = findAll("apprenant", ["promo"=>$actualPromo]);
}

if(isset($_REQUEST["filter"])){
    $datas["data"] = filter($datas["data"], $_REQUEST["filter"]);
    if(isset($_REQUEST["filter1"])){
        $config["filter1"] = $_REQUEST["filter"];
        $config["filter"] = "";
    }else{
        $config["filter"] = $_REQUEST["filter"];
        $config["filter1"] = "";
    }

    $filter = $config["filter1"];
    $data_filter = $config["filter"];
    
    configuration($page_name, $config);
    
    $actualPage = 0;
}

// On récupére la taille du tableau
$lenght_data = sizeof($datas["data"]);


// On récupére l'intervale de l'élément qu'on veut afficher
$start = $actualPage * $nbItems;
$end = $start + $nbItems;
if($end>$lenght_data) $end = $lenght_data;

configuration("apprenant", $config);
$data_filter = $config["filter"];


// On récupére les éléments a afficher dans une interval donnée
$datas["data"] = array_slice($datas["data"], $start, $end);

// On vérifie s'il y a des éléments dans le tableau pour ajouter 1 à start
if(sizeof($datas["data"])) $start++;


// On inclut la view pour les apprenants
include PATH_FILE."/layouts/layout.html.php";
?>