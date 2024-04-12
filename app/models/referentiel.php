<?php 

function addReferentiel($data){
    if(isset($data["libelle"]) && isset($data["desc"])){
        $path = PATH_DATA."/referentiel.json";
        $datas = readJsonFile($path);
        $new = [
            "desc" => isset($data["desc"]) ? $data["desc"] : "",
            "libelle" => isset($data["libelle"])?$data["libelle"] : "",
            "id" => substr($data["libelle"], 0, 3),
            "image" => "image.png"
        ];
        
        $datas[] = $new;

        if(writeJsonFile($path, $datas)){
            return $new["id"];
        }
    }
    return false;
}

function getReferentielById($id){
    return findAll("referentiel", ["id"=>$id]);
}

function filterReferentiel($filter){
    $result = [];
    foreach($filter as $filt){
        $result[] = getReferentielById($filt)[0];
    }
    return $result;
}



?>  