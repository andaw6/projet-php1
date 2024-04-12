<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application gestion des étudiants d'orange digital center</title>
    <link rel="stylesheet" href="<?=PATH_CSS?>/style.css">
    <link rel="stylesheet" href="<?=PATH_CSS?>/pagination.css">
    <link rel="stylesheet" href="<?=PATH_CSS?>/<?=$page_name?>.css">
    <!-- le link le boxicon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Le link pour le cdn de font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
          integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php if(isset($_REQUEST["bg"]) && $_REQUEST["bg"]=="black"): ?>
        <style>
            :root{
                --color-background: #181a1e;
                --color-white: #202528;
                --color-dark: #edeffd;
                --color-dark-variant: #a3bdcc;
                --color-light: rgba(0, 0, 0, 0.4);
                --box-shadow: 0 2rem 3rem var(--color-light);
            }
        </style>
    <?php endif; ?>
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