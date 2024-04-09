<?php 
// Inclusion du model
include_once ROOT."/app/models/presence.php";


// On récupére les informations pour la pagination
$rst = paginer($actualPage, $nbItems, $lenght_data);
$actualPage = $rst["ap"];
$redirection = $rst["rd"];
$nbItems = $rst["nbi"];


// Les actions que l'utilisateur peut faire
if(isset($_POST["action"])){
    if( $_POST["action"] == "filter"){
        $filter["status"] = $_POST["status"];
        $filter["ref"] = $_POST["ref"];
        $actualPage = 0;
    }
}

// On récupére les présences filtrer
$datas = filterAllPresence($filter);
$lenght_data = sizeof($datas);
    

// On récupére l'intervale de l'élément qu'on veut afficher
$start = $actualPage * $nbItems;
$end = $start + $nbItems;
if($end>$lenght_data) $end = $lenght_data;



// On récupére les éléments a afficher dans une interval donnée
$datas = getElementByInterval($datas, $start, $end);

// On vérifie s'il y a des éléments dans le tableau pour ajouter 1 à start
if(sizeof($datas)) $start++;


// met à jour les données
$config["items"] = $nbItems;
$config["pages"] = $actualPage;
$config["filter"] = $filter;


// On ajouter les données mis à jour dans le fichier de configuration
configuration("presence", $config);


// On redirige la page
if($redirection){
    // Construire une nouvelle URL sans la variable
    $new_page = $_GET["page"];
    $nouvelle_url = WEB."?page=$new_page";
    // Rediriger l'utilisateur vers la nouvelle URL
    header("Location: $nouvelle_url");
}




// On affiche la view pour les présences 
include PATH_FILE."/layouts/layout.html.php";


?>  