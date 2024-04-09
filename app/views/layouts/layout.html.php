<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application gestion des étudiants d'orange digital center</title>
    <link rel="stylesheet" href="<?=PATH_CSS?>/style.css">
    <link rel="stylesheet" href="<?=PATH_CSS?>/pagination.css">
    <link rel="stylesheet" href="<?=PATH_CSS?>/<?=$page_name?>.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
          crossorigin="anonymous" referrerpolicy="no-referrer" 
    />
</head>
<body>
    <!-- Le conteneur principal qui contient tout la page -->
    <div id="container" class="flex">
        <!-- le boutton pour le menu -->
        <input type="checkbox" id="slider">
        
        <!-- On inclut le side bar ou la barre latéral qui permet la navigation -->
        <?php include_once PATH_FILE."/layouts/side-bar.html.php"; ?>

        <!-- Le contenu principal de la page -->
        <div id="content-page">
            <!-- On inclut le header ou l'en-tête de la page -->
            <?php include_once PATH_FILE."/layouts/header.html.php"; ?>
            <div id="main">
                <!-- On affiche le contenue de la page qui sera stocker dans la variable content_pages -->
                <?php include_once PATH_FILE."/$page_name/index.html.php"; ?>    
                
                <!-- On inclut le footer ou bas de page -->
                <?php include_once PATH_FILE."/layouts/footer.html.php"; ?>   

            </div>
        </div>

        <!-- Le boutton floattant pour les paramètres -->
        <button id="setting" class="flex-cc">
            <i class='bx bxs-cog' ></i>
        </button>
    </div>
</body>
</html>