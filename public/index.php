<?php 

// Le tableau qui contient la liste de tout les pages de l'application
$list_pages = ["dashboard", "promotion", "referentiel", "apprenant", "visiteur", "presence", "evenement"];

// On include la fichier de configuration
include_once "../config/config.php";

// On déclare une variable pour stocker les uri
$uri = 0;

// On récupére les requêtes
$uri = $_REQUEST["page"];

// On vérifie l'uri que l'utilisateur a donner
if(isset($uri)){
    // la page de par défaut après connexion 
    $PAGE = 6; 
    
    if($uri>=1 && $uri <= 7){
        $PAGE = $uri; // On recupére le numéro de la page qu'on veut charger

        // On récupére le nom de la page qu'on veut charger
        $page_name = $list_pages[$PAGE-1];

        // On inclut le controller global
        include ROOT."/app/controllers/controller.php";

        // Inclusion du model
        include_once ROOT."/app/models/$page_name.php";
        
        // On inclut le controlleur corresponand au page donné
        include ROOT."/app/controllers/$page_name.php";

    }else{

        // On inclut la page pour les erreurs
        include PATH_FILE."/error/index.html.php";
    }

}else{

    // On inclut la page de connexion
    include PATH_FILE."/connexion/index.html.php";

}

?>

