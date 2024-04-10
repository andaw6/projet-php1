<!-- Le side bar ou la barre latéral pour la navigation -->
<aside id="side-bar" class="flex-col">
    <div class="aside-header flex-col">
        <div class="aside-logo flex-cc">
            <img src=<?= PATH_IMG."/logo.png" ?> alt="">
        </div>
        <div class="aside-info flex">
            <span class="bar"></span>
            <span class="label">menu</span>
        </div>
    </div>
    <!-- La bare de navigation -->
    <nav class="flex-col">
        <a href="?page=1" > 
            <span class="icon">
                <i class='bx bx-menu-alt-right'></i>
            </span>
            <span class="icon-label">Dashboard</span>
        </a>

        <a href="?page=2&pg=p1" <?php if ($PAGE == 2):?>class="selected" <?php endif; ?>>
            <span class="icon">
                <i class='bx bx-spreadsheet'></i>
            </span>
            <span class="icon-label">Promos</span>
        </a>

        <a href="?page=3" <?php if ($PAGE == 3):?>class="selected" <?php endif; ?>>
            <span class="icon">
                <i class='bx bx-calendar'></i>
            </span>
            <span class="icon-label">Référentiels</span>
        </a>

        <a href="?page=4" <?php if ($PAGE == 4):?>class="selected" <?php endif; ?>>
            <span class="icon">
                <i class='bx bx-user'></i>
                <!-- <i class='bx bx-user-circle'></i> -->
            </span>
            <span class="icon-label">Utilisateur</span>
        </a>

        <a href="?page=5" <?php if ($PAGE == 5):?>class="selected" <?php endif; ?>>
            <span class="icon">
                <i class='bx bx-user-circle'></i>
            </span>
            <span class="icon-label">Visiteurs</span>
        </a>

        <a href="?page=6" <?php if ($PAGE == 6):?>class="selected" <?php endif; ?>>
            <span class="icon">
                <i class='bx bx-user-circle'></i>
            </span>
            <span class="icon-label">Presence</span>
        </a>

        <a href="?page=7" <?php if ($PAGE == 7):?>class="selected" <?php endif; ?>>
            <span class="icon">
                <i class='bx bx-calendar'></i>
            </span>
            <span class="icon-label">Evénements</span>
        </a>
    </nav>
</aside>