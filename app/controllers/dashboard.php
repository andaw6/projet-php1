<?php 
// Inclusion du model
include_once ROOT."/app/models/dashboard.php";
include_once ROOT."/app/models/referentiel.php";

$datas["refs"] = filterReferentiel(array_keys($datas["promo"]["refs"]));
$datas["info"] = getInfoStudents($actualPromo);
$datas["info"]["nbr"] = count($datas["refs"]);

if(isset($_REQUEST["filter"])){
    $datas["refs"] = filter($datas["refs"], $_REQUEST["filter"]);
    $config["filter"] = $_REQUEST["filter"];
}


$view = "dashboard";

configuration("dashboard", $config);

$data_filter = $config["filter"];

// On inclut la view pour le dashboard
include PATH_FILE."/layouts/layout.html.php";

?>