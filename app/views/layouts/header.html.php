<!-- L'en-tête de la page ou le header -->
<header id="header" class="flex-sbc">
    
    <!-- La parti gauche de l'en-tête -->
    <form method="post" class="content-left flex">
        <!-- <input type="checkbox" id="menu-btn"> -->
        <span class="box-icon flex-cc">
            <i class='bx bx-grid-alt'></i>
        </span>
        <div class="box-input flex">
            <input type="text" name="filter" class="input" placeholder="Recherche par matricule" value="<?=$data_filter?>">
            <span class="box-icon flex-cc">
                <i class='bx bx-search' ></i>
            </span>
        </div>
    </form>

    <!-- La parti droite de l'en-tête -->
    <div class="content-right flex">
        <!-- la parti calendrier pour afficher la date actuel -->
        <div class="calendar flex">
            <div class="icon flex-cc">
                <i class='bx bx-calendar-minus'></i>
            </div>
            <span class="date">20 March 2024</span>
        </div>

        <!-- La parti pour les inforamtions de l'utilisateur actuel -->
        <div class="user-info flex">
            <div class="logo flex-cc">
                <img src="<?=PATH_IMG?>/profil.jpeg" alt="">
            </div>
            <div class="users flex-col">
                <div class="user-name">Super_admin</div>
                <select name="select-user" class="select-users">
                    <option value="admin">Admin Admin</option>
                    <option value="admin1">Ehac Sish</option>
                </select>
            </div>
        </div>
    </div>

</header>