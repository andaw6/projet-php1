<?php 
// Inclusion du model
include_once ROOT."/app/models/referentiel.php";
include_once ROOT."/app/models/promotion.php";

$datas["data"] = filterReferentiel(array_keys($datas["promo"]["refs"]));

if($_REQUEST["filter"]){
    $datas["data"] = filter($datas["data"], $_REQUEST["filter"]);
    $config["filter"] = $_REQUEST["filter"];
    $actualPage = 0;
}


if($_REQUEST["add-promo"]){
    // var_dump($_REQUEST);
    if(($rst = addReferentiel($_REQUEST))){
        $datas["promo"]["refs"][$rst] = "desactive";
        updatePromo($datas["promo"]);
        redirection($PAGE);
    }
}

// On inclut la view pour les référentiel
include PATH_FILE."/layouts/layout.html.php";
?> 