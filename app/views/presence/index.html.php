<section id="presence">
    <header class="flex-sbc">
        <div class="content-left">
            <span class="bold">Présence</span>
        </div>
        <div class="content-right">
            <span>Présence</span>
            <span>></span>
            <span class="bold">Liste</span>
        </div>
    </header>
    <div>
        <!-- le code pour le formulaire de filtre -->
        <section>
            <form method="post" id="filter" class="flex">
                <input type="hidden" name="action" value="filter">
                <div class="boite status flex-cc">
                    <select name="status" id="select-status">
                        <option value="" <?php if($config["status"] == ""):?>selected<?php endif;?>>Status</option>
                        <option value="present" <?php if($config["status"] == "present"):?> selected <?php endif; ?>><span>present</span></option>
                        <option value="absent" <?php if($config["status"] == "absent"):?> selected <?php endif; ?>>absent</option>
                    </select>
                </div>
                <div class="boite reference flex-cc">
                    <select name="ref" id="select-ref">
                        <option value="" <?php if($filter["ref"] == ""):?> selected <?php endif; ?>>Reférenciel</option>
                        <option value="Dev Web/Mobile" <?php if($filter["ref"] == "Dev Web/Mobile"):?> selected <?php endif; ?>>dev web</option>
                        <option value="DATA" <?php if($filter["ref"] == "DATA"):?> selected <?php endif; ?>>dev data</option>
                        <option value="REF DIG" <?php if($filter["ref"] == "REF DIG"):?> selected <?php endif; ?>>ref dig</option>
                        <option value="AWF" <?php if($filter["ref"] == "AWF"):?> selected <?php endif; ?>>awf</option>
                        <option value="HACKEUSE" <?php if($filter["ref"] == "HACKEUSE"):?> selected <?php endif; ?>>hackeuse</option>
                    </select>
                </div>
                <div class="boite clandrier flex-cc">
                    <input type="date" name="date">
                </div>
                <div class="boite button flex-cc">
                    <button>rafraichir</button>
                </div>
            </form>
        </section>

        <!-- le code pour la liste des présences -->
        <table class="flex-col">
       
           <?php if(isset($datas) == false || $lenght_data == 0):?>
                <h2 style='text-align:center; margin-top:2em;'>Aucun présence n'a été trouver</h2>
            <?php 
                else:
                    foreach($datas as $data):
            ?>
            <tr>
                <td><span class="head"></span><span class="content"><?=$data["matricule"]?></span></td>
                <td><span class="head"></span><span class="content"><?=$data["nom"]?></span></td>
                <td><span class="head"></span><span class="content"><?=$data["prenom"]?></span></td>
                <td><span class="head"></span><span class="content"><?=$data["telephone"]?></span></td>
                <td><span class="head"></span><span class="content"><?=$data["referentiel"]?></span></td>
                <td><span class="head"></span><span class="content"><?=$data["heure_arrivee"]?></span></td>
                <td><span class="head"></span><span class="content <?=$data["status"]?>"><span><?=$data["status"]?></span></span></td>
            </tr>
            <?php 
                endforeach;
            endif;
            ?>
                    
                </table>
                
                
        <!-- Le code pour la pagination -->
        <?php 
            if(sizeof($datas) != 0){
                include_once PATH_FILE."/layouts/pagination.html.php";
            }
        ?>

        
    </div>
</section> 