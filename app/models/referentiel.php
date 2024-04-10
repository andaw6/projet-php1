<?php 

function addReferentiel($data){
    if(isset($data["libelle"]) && isset($data["dec"])){
        $path = PATH_DATA."/referentiel.json";
        $datas = readJsonFile($path);
        $new = [
            "status" => "active",
            "image" => "image.png",
            "desc" => isset($data["desc"]) ? $data["desc"] : "",
            "label" => isset($data["libelle"])?$data["libelle"] : ""
        ];
        $datas[] = $new;

        return writeJsonFile($path, $datas);
    }
    return false;
}



?>  