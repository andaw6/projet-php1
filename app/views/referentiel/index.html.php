<section id="referentiel">
    <header class="flex-sbc">
        <div class="content-left">
            <span class="bold">Référentiels</span>
        </div>
        <div class="content-right">
            <span class="">Référentiels</span>
            <span><i class='bx bx-chevron-right'></i></span>
            <span class="bold">Liste</span>
        </div>
    </header>

    <div id="section-referentiel" class="flex">
        <div class="content-ref flex">
            <?php foreach($datas["data"] as $data): ?>
                <?php $status = $datas["promo"]["refs"][$data["id"]];?>
                <div class="box">
                    <div class="head">
                        <span class="icon">
                            <i class='bx bx-dots-horizontal-rounded'></i>
                        </span>
                    </div>
                    <div class="head-content flex-col">
                        <div class="box-img">
                            <img src="<?=PATH_IMG?>/ref/<?=$data['image']?>" alt="">
                        </div>
                        <div class="info  flex-col">
                            <div class="info-name">
                                <?=$data["libelle"]?>
                            </div>
                            <div class="status <?=$status?>">
                                <?=$status?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            
        </div>
        <div class="add-ref flex">
            <form class="box" method="post">
                <div class="head">
                    <span>Nouveau Referentiel</span>
                </div>
                <div class="head-content flex-col">
                    <label for="libelle">Libelle</label>
                    <div class="saisie">
                        <span class="box-icon">
                            <i class="fa-regular fa-user"></i>
                        </span>
                        <input type="text" name="libelle" placeholder="Entrer le libelle">
                    </div>
                    <label for="desc">Description</label>
                    <div class="saisie">
                        <span class="box-icon">
                            <i class="fa-regular fa-user"></i>
                        </span>
                        <textarea name="desc" cols="30" placeholder="Entrer le Description"></textarea>
                    </div>
                    <button type="submit" name="add-promo" value="true">Enregistrer</button>
                        
                </div>
            </form>
        </div>
    </div>
</section>  