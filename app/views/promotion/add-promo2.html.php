<div id="parti2">
    <div class="flex head-promo">
        <div class="decor flex-cc">
            <a href="?page=<?=$PAGE?>&ap=back"><i class='bx bxs-edit-alt'></i></a>
        </div>
        <span class="bold">Promotion</span>
    </div>
    <div class="content-promo">
        <div class="form flex">
            <form class="flex-col"></form>
        </div>
    </div>
    <div class="flex head-promo">
        <div class="decor flex-cc"><span>2</span></div>
        <span class="bold">Référentiels</span>
    </div>
    <div class="content-ref">
        <form method="post">
            <span>Selectioner un ou plusieurs référentiel(s)</span>
            <ul>
                <li>
                    <input type="checkbox" name="ref-web" value="web">
                    <label for="ref-web">Dev Web/Mobile</label>
                </li>
                <li>
                    <input type="checkbox" name="ref-dig" value="dig">
                    <label for="ref-dig">Referentiel Digital</label>
                </li>
                <li>
                    <input type="checkbox" name="ref-aws" value="aws">
                    <label for="ref-aws">AWS</label>
                </li>
                <li>
                    <input type="checkbox" name="ref-hac" value="hack">
                    <label for="ref-hac">Hackeuse</label>
                </li>
                <li>
                    <input type="checkbox" name="ref-data" value="data">
                    <label for="ref-data">Developpement Data</label>
                </li>
            </ul>
            <div class="btns flex">
                <button id="btn-return" type="submit" name="ap" value="back">back</button>
                <button id="btn-create" type="submit" name="ap" value="creer-ajout">Créer</button>
            </div>
        </form>
    </div>
</div>