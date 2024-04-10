<section id="promotion">
    <header class="flex-sbc">
        <div class="content-left">
            <span class="bold">Promotions</span>
        </div>
        <div class="content-right">
            <a class="bold" href="?page=<?=$PAGE?>&pg=p1" style="display: inline;">Promos</a>
            <?php if($view != "promotion"){ ?>
                <span><i class='bx bx-chevron-right'></i></span>
                <span class="bold">Création</span>
            <?php } ?>
        </div>
    </header>
    <div id="content-promo">
        <?php include_once ROOT."/app/views/$page_name/$view.html.php"; ?>
    </div>
</section>