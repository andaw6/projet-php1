<?php 

// le chemin pour le fichier de configuration et les données de configuration
$config = configuration($page_name);

// variable pour la confimation d'une redirection
$redirection = false;

// On récupére le filtre qui a été appliquer
$filter = $config["filter"];

// On récupére le nombre d'élément qu'on veut afficher dans une page
$nbItems = $config["items"];

// On récupére la page actuel et le nombre d'élément qu'on peut afficher
$actualPage = $config["pages"];


// on récupére la liste de tous les présences
$datas= findAll($page_name);
$lenght_data = sizeof($datas);

?>