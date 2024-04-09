<?php 
// Inclusion du model
include_once ROOT."/app/models/referentiel.php";


if($_POST["add-promo"]){
    if(addReferentiel($_POST)){
        // Construction d'une nouvelle URL sans la variable
        $nouvelle_url = WEB."?page=".$_GET["page"];
        // Rediriger l'utilisateur vers la nouvelle URL
        header("Location: $nouvelle_url");
    }
}

// On inclut la view pour les référentiel
include PATH_FILE."/layouts/layout.html.php";
?> 