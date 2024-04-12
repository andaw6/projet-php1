<?php 
// Inclusion du model
include_once ROOT."/app/models/presence.php";

$datas["data"] = getPresence($actualPromo);
$lenght_data = sizeof($datas["data"]);


// On récupére les informations pour la pagination
$rst = paginer($actualPage, $nbItems, $lenght_data);
$actualPage = $rst["ap"];
$redirection = $rst["rd"];
$nbItems = $rst["nbi"];
$dateAct = date("Y-m-d");

if(isset($_REQUEST['refraiche'])){
    $datas["data"] = filterPresence($datas["data"],$_REQUEST);
    $config["filter"]["status"] = $_REQUEST["status"];
    $config["filter"]["ref"] = $_REQUEST["ref"];
    $dt = $dateAct;
    if(isset($_REQUEST["calendar"])) $dt = $_REQUEST["calendar"];
    $config["filter"]["date"] = $dt;
}


// Les actions que l'utilisateur peut faire
if(isset($_REQUEST["action"])){
    if( $_REQUEST["action"] == "filter"){
        $filter["status"] = $_REQUEST["status"];
        $filter["ref"] = $_REQUEST["ref"];
        $actualPage = 0;
    }
}

if(isset($_REQUEST["filter"])){
    $datas["data"] = filter($datas["data"], $_REQUEST["filter"]);
    $data_filter = $_REQUEST["filter"];
}
    

// On récupére l'intervale de l'élément qu'on veut afficher
$start = $actualPage * $nbItems;
$end = $start + $nbItems;
if($end>$lenght_data) $end = $lenght_data;



// On récupére les éléments a afficher dans une interval donnée
$datas["data"] = array_slice($datas["data"], $start, $end);

// On vérifie s'il y a des éléments dans le tableau pour ajouter 1 à start
if(sizeof($datas["data"])) $start++;


// met à jour les données
$config["items"] = $nbItems;
$config["pages"] = $actualPage;
$config["filter"] = $filter;


// On ajouter les données mis à jour dans le fichier de configuration
configuration("presence", $config);


// On redirige la page
if($redirection){
    redirection($PAGE);
}


// On affiche la view pour les présences 
include PATH_FILE."/layouts/layout.html.php";


?>  