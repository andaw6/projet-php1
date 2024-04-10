<?php 
// Inclusion du model
include_once ROOT."/app/models/referentiel.php";


if($_POST["add-promo"]){
    if(addReferentiel($_POST)){
        redirection($PAGE);
    }
}

// On inclut la view pour les référentiel
include PATH_FILE."/layouts/layout.html.php";
?> 