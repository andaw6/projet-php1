<section id="apprenant">
    <header class="flex-col">
        <div id="header1" class="flex-sbc">
            <div class="content-left">
                <span class="bold">Apprenants</span>
            </div>
            <div class="content-right">
                <span>Promos</span>
                <span><i class='bx bx-chevron-right'></i></span>
                <span>Liste</span>
                <span><i class='bx bx-chevron-right'></i></span>
                <span>Détails</span>
                <span><i class='bx bx-chevron-right'></i></span>
                <span class="bold">Apprenants</span>
            </div>
        </div>
        <div id="header2" class="flex-sbc">
            <div class="first">
                <span>Promotion:</span>
                <span class="info">Promotion 6</span>
            </div>
            <div class="second">
                <span>Référentiel:</span>
                <span class="info">Dev Web/Mobile</span>
            </div>
        </div>
    </header>

    <div id="liste-apprenant">

        <div id="head-decor" class="flex">
            <div class="decor flex-cc">
                <span>1</span>
            </div>
            <span>Apprenants</span>
        </div>

        <div class="flex-col" id="content-head">

            <!-- La parti qui permet de faire des actions sur un apprenant -->
            <div class="header flex-sbc">
                <div class="content-left flex">
                    <span>Liste des Apprenants <span class="info">(50)</span></span>
                </div>
                <div class="content-right flex">
                    <div class="flex">
                        <button class="btn flex add">
                            <span class="icon">+</span>
                            <span class="lbl">Nouveau</span>
                        </button>
                        <button class="btn flex insert">
                            <span class="icon">
                                <i class="fa-solid fa-user"></i>
                            </span>
                            <span class="lbl">Insertion en masse</span>
                        </button>
                    </div>
                    <div class="flex">
                        <button class="btn flex file">
                            <div class="icon"><i class='bx bx-download'></i></div>
                            <span class="lbl">Fichier model</span>
                        </button>
                        <button class="btn flex list">
                            <!-- <span class="icon"></span> -->
                            <span class="lbl">Liste des Exclus</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- La parti qui permet de filtrer les apprenants -->
            <div class=" search flex-col">
                <form id="form" method="post" class="flex" name="filter">
                    <div class="content-search">
                        <input type="text" placeholder="Filter" name="filter">
                        <span class="icon flex-cc">
                            <i class='bx bx-search' ></i>
                        </span>
                    </div>

                    <button id="confirm">
                        <a href="?reset">
                            <i class='bx bx-reset'></i>
                            <!-- <i class="fa-sharp fa-solid fa-check"></i> -->
                        </a>
                    </button>
                </form>

                <div class="box-icon">
                    <img src="<?= PATH_IMG ?>/dossier.png">
                </div>
            </div>

            <!-- La partie ou on doit afficher la liste des apprenant -->
            <table class="flex-col">

                <?php if (isset($datas) == false || $lenght_data == 0) : ?>
                    <tr>
                        <td><span class="head"></span><span class="content"></span></td>
                        <td><span class="head"></span><span class="content"></span></td>
                        <td><span class="head"></span><span class="content"></span></td>
                        <td><span class="head"></span><span class="content"></span></td>
                        <td><span class="head"></span><span class="content"></span></td>
                        <td><span class="head"></span><span class="content"></span></td>
                        <td><span class="head"></span><span class="content"><span></span></span></td>
                    </tr>
                    <?php else : foreach ($datas as $data) : ?>
                        <tr>
                            <td>
                                <span class="head"></span>
                                <span class="content flex-cc">
                                    <img src="<?= PATH_IMG ?>/user/<?= $data['image'] ?>" alt="">
                                </span>
                            </td>
                            <td><span class="head"></span><span class="content"><?= $data["nom"] ?></span></td>
                            <td><span class="head"></span><span class="content"><?= $data["prenom"] ?></span></td>
                            <td><span class="head"></span><span class="content"><?= $data["email"] ?></span></td>
                            <td><span class="head"></span><span class="content"><?= $data["genre"] ?></span></td>
                            <td><span class="head"></span><span class="content"><?= $data["telephone"] ?></span></td>
                            <td>
                                <span class="head"></span>
                                <span class="content">
                                    <a href="?act=1"></a>
                                </span>
                            </td>
                        </tr>
                <?php endforeach; endif; ?>
            </table>

            <!-- La parti pour la pagination -->
            <?php include_once PATH_FILE . "/layouts/pagination.html.php" ?>
        </div>
    </div>

</section>