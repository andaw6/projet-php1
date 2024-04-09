<?php 
// Inclusion du model
include_once ROOT."/app/models/apprenant.php";


// On récupére les informations pour la pagination
$rst = paginer($actualPage, $nbItems, $lenght_data);
$actualPage = $rst["ap"];
$redirection = $rst["rd"];
$nbItems = $rst["nbi"];


// Les actions que l'utilisateur peut faire
if(isset($_POST["filter"])){
    $datas = filterAllStudent($_POST["filter"]);
    $actualPage = 0;
}
// On vérifie si l'utilisateur veur restaurer la filtre
if(isset($_GET["reset"])){
    $datas = findAll("apprenant");
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


// On inclut la view pour les apprenants
include PATH_FILE."/layouts/layout.html.php";
?>