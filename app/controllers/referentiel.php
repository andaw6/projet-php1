<?php 
// Inclusion du model
include_once ROOT."/app/models/referentiel.php";

// On récupére les informations pour la pagination
$rst = paginer($actualPage, $nbItems, $lenght_data);
$actualPage = $rst["ap"];
$redirection = $rst["rd"];
$nbItems = $rst["nbi"];

// On inclut la view pour les référentiel
include PATH_FILE."/layouts/layout.html.php";
?> 