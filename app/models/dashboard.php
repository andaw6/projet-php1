<?php

function getInfoStudents($promo){
    $students = findAll("apprenant", ["promo" => $promo]);
    $result["nba"] = sizeof($students);
    $result["act"] = sizeof(filter($students, "status=active"));
    $result["iact"] = sizeof(filter($students, "status=desactive"));
    $f = sizeof(filter($students, "genre=f"));
    $m = sizeof(filter($students, "genre=m"));
    $nba = $result["nba"];
    // On calcule le taux de fémininisme et de masculine
    $result["fem"] = intval($f * 100 / $nba);
    $result["mas"] = ceil($m * 100 / $nba);
    return $result;
}


?>