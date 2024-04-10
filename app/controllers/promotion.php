<?php
include_once ROOT."/app/models/promotion.php";

$views = [
    "p1" => "promotion",
    "p2" => "add-promo1",
    "p3" => "add-promo2"
];

$view = $views["p1"];

// On inclut la view pour les promotions
include PATH_FILE."/layouts/layout.html.php";
?>