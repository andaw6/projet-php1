    <section id="dashboard">
        <!-- L'en-tête de la page -->
        <header class="flex-sbc">
            <div class="content-left">
                <span class="bold">Promotions</span>
            </div>
            <div class="content-right">
                <span class="bold">Promos</span>
                <span><i class='bx bx-chevron-right'></i></span>
                <span class="bold">Liste</span>
                <span><i class='bx bx-chevron-right'></i></span>
                <span class="bold">Détails</span>
            </div>
        </header>

        <!-- Là où on doit mettre la views qu'on veut afficher -->
        <?php include_once PATH_FILE."/$page_name/$view.html.php"; ?>

    </section>