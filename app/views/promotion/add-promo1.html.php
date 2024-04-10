<div id="parti1">
    <div class="flex head-promo">
        <div class="decor flex-cc"><span>1</span></div>
        <span class="bold">Promotion</span>
    </div>
    <div class="content-promo">
        <div class="form flex">
            <form class="flex-col" method="post" >
                <div class="ligne flex-col">
                    <div class="box flex-col">
                        <label for="libelle">Libelle</label>
                        <div class="saisie">
                            <input type="text" name="libelle" placeholder="Entrer le label" value="<?=$libelle?>" required>
                            <span class="require">*</span>
                        </div>
                    </div>
                </div>
                <div class="ligne flex ligne2">
                    <div class="box flex-col">
                        <label for="debut">Date Début</label>
                        <div class="saisie">
                            <input type="date" name="debut" class="clendar" value="<?=$debut?>" required>
                            <span class="require">*</span>
                            <span class="box-icon"></span>
                        </div>
                    </div>
                    <div class="box flex-col">
                        <label for="fin">Date Fin</label>
                        <div class="saisie">
                            <input type="date" name="fin" class="clendar" value="<?=$fin?>" required>
                            <span class="require">*</span>
                            <span class="box-icon"></span>
                        </div>
                    </div>
                </div>
                <div class="buttons flex-sbc">
                    <button class="btn" type="submit" name="ap" value="ajout">Ajouter Référentiel(s)</button>
                    <button class="btn" type="submit" name="ap" value="creer">Créer Promotion</button>
                </div>
            </form>
        </div>
    </div>
    <div class="flex head-promo">
        <div class="decor flex-cc second"><span>2</span></div>
        <span class="bold">Référentiels</span>
    </div>
    <div class="content-ref">

    </div>
</div>