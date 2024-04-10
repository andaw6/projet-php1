<!-- Le contenue du dashboard -->
<main id="sect-main">

    <!-- La division pour les informations du promotion active -->
    <div id="promo-info">

        <!-- Le première box pour les détails du promotion active -->
        <div class="box box1">
            <div class="logo">

            </div>
            <div class="content-box">
                <div class="col">
                    <span class="col-hd">Libelle:</span>
                    <span class="teal">Promotion 6</span>
                </div>

                <div class="col">
                    <span class="col-hd">Date Fin Prévue:</span>
                    <span class="teal">2024-11-01</span>
                </div>

                <div class="col">
                    <span class="col-hd">Date Début:</span>
                    <span class="teal">2024-02-01</span>
                </div>

                <div class="col">
                    <span class="col-hd">Date Fin Réelle:</span>
                    <span class="teal">2024-11-01</span>
                </div>
            </div>
        </div>

        <!-- Le deuxième box pour les référentiels d'une promotion active -->
        <div class="box box2">
            <div class="logo">
                <span>
                    <img src="<?= PATH_IMG ?>/target.svg" alt="">
                </span>
            </div>
            <div class="content-box">
                <div class="flex-col">
                    <span>Nombre de Référentiels</span>
                    <span class="nb">5</span>
                </div>
            </div>
        </div>

        <!-- Le troisième box pour les apprenants actifs -->
        <div class="box box3">
            <div class="logo">
                <span>
                    <img src="<?= PATH_IMG ?>/target.svg" alt="">
                </span>
            </div>
            <div class="content-box">
                <div class="flex-col">
                    <span>Nombre d'apprenants actifs</span>
                    <span class="nb">128</span>
                </div>
            </div>
        </div>

        <!-- Le quatrième box pour les apprenants inactifs -->
        <div class="box box4">
            <div class="logo">
                <span>
                    <img src="<?= PATH_IMG ?>/target.svg" alt="">
                </span>
            </div>
            <div class="content-box">
                <div class="flex-col">
                    <span>Nombre d'apprenants inactifs</span>
                    <span class="nb">10</span>
                </div>
            </div>
        </div>

    </div>

    <div id="list-content">
        <!-- La partie gauche du dashboard -->
        <div id="left">
            <!-- La division pour la liste des référentiels -->
            <div id="promo-list">
                <!-- L'en-tête pour la liste des référentiels -->
                <div class="head-promo flex-sbc">
                    <div class="content-left">
                        <span>Listes des Référentiels</span>
                    </div>
                    <div class="content-right">
                        <span class="icon">
                            <i class='bx bx-dots-horizontal-rounded'></i>
                        </span>
                    </div>
                </div>
                <!-- Le box qui contient la liste des référentiels -->
                <div id="list">
                    <!-- Le box pour un référentiel -->
                    <div class="box">
                        <div class="head">
                            <span class="icon">
                                <i class='bx bx-dots-horizontal-rounded'></i>
                            </span>
                        </div>
                        <div class="head-content flex-col">
                            <div class="info flex">
                                <span class="bold label">Dev Web/Mobil</span>
                            </div>
                            <div class="box-img">
                                <img src="" alt="">
                                <!-- <img src="<?= PATH_IMG ?>/ref/<?= $data['image'] ?>" alt=""> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- La partie droite du dashboard -->
        <div id="right" class="flex- col">
            <!-- La division pour les genres -->
            <div id="genre" class="flex-col">
                <!-- l'en-tête de la partie pour les genres -->
                <div class="header-genre">
                    <h3>genre</h3>
                </div>
                <!-- La division pour les contenues  -->
                <div class="content-genre flex-col">
                    <div class="group flex-sbc">
                        <div class="left flex">
                            <div class="progresse pg1">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" data-text="3%"></div>
                            </div>
                        </div>
                        <div class="right">
                            <span class="label">Féminin</span>
                            <span><i class='bx bx-chevron-right'></i></span>
                        </div>
                    </div>
                    <div class="group flex-sbc">
                        <div class="left flex">
                            <div class="progresse pg2">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" data-text="1%"></div>
                            </div>
                        </div>
                        <div class="right">
                            <span class="label">Masculin</span>
                            <span><i class='bx bx-chevron-right'></i></span>
                        </div>
                    </div>
                    <div class="group flex-sbc">
                        <div class="left flex">
                            <div class="progresse pg3">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" data-text="0%"></div>
                            </div>
                        </div>
                        <div class="right">
                            <span class="label">Taux d'insertion</span>
                            <span><i class='bx bx-chevron-right'></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- La division pour les insertions -->
            <div id="insertion">
                <!-- L'en-tête de la partie insertion -->
                <div class="header-insertion">
                    <div class="content-left">
                        <span>Insertion</span>
                    </div>
                    <div class="content-right">
                        <span class="icon">
                            <i class='bx bx-dots-horizontal-rounded'></i>
                        </span>
                    </div>
                </div>
                <!-- Le contenue de la partie insertions -->
                <div class="content-insert">
                </div>
            </div>
        </div>
    </div>

</main>