<div id="list-promo">
    <header class="flex-sbc">
        <div class="content-left flex">
            <span class="text bold">Liste des promotions</span>
            <span class="nb-promo bold">(1)</span>
        </div>
        <form class="content-right flex-sbc" method="post" name="filter">
            <div class="search">
                <input type="text" name="filter" placeholder="Rechercher ici ..." value=<?=$filter?>>
                <span type="submit" class="icon flex-cc">
                    <i class='bx bx-search'></i>
                </span>
            </div>
            <button id="btn-add">
                <a href="?page=<?=$PAGE?>&pg=p2">+ nouvelle</a>    
            </button>
        </form>
    </header>
    <!-- La partie ou on doit afficher la liste des apprenant -->
    <table class="flex-col">
        <?php if (isset($datas) == false || $lenght_data == 0) : ?>
            <h2 style='text-align:center; margin-top:2em;'>Aucun promotion n'a été trouver</h2>
            <?php else : foreach ($datas as $data) : ?>
                <tr>
                    <td>
                        <span class="head"></span>
                        <div class="content flex-cc">
                            <span class="icon">
                                <i class='bx bx-aperture'></i>
                            </span>
                            <span class="promo-name"><?= $data["libelle"] ?></span>
                        </div>
                    </td>
                    <td><span class="head"></span><span class="content"><?= $data["debut"] ?></span></td>
                    <td><span class="head"></span><span class="content"><?= $data["fin"] ?></span></td>
                    <td><span class="head"></span><span class="content <?= $data["status"] ?>" data-text=<?= $data["status"] ?>></span></td>
                    <td>
                        <span class="head"></span>
                        <span class="content">
                            <a href="?page=<?=$PAGE?>"></a>
                        </span>
                    </td>
                </tr>
        <?php endforeach;
        endif; ?>
    </table>

    <!-- Le code pour la pagination -->
    <?php
    if (count($datas) != 0)
        include_once PATH_FILE . "/layouts/pagination.html.php";

    ?>
</div>