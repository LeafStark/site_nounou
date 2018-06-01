<?php

function calculDuree($date_debut, $date_fin, $heure_debut, $heure_fin) {
    $date = intval(str_replace("-", "", $date_fin)) - intval(str_replace("-", "", $date_debut));
    $heure = intval(str_replace(":", "", $heure_fin)) - intval(str_replace(":", "", $heure_debut));
    $heure_total = $date * $heure / 100;
    return $heure_total;
}

function calculSalaire($heure, $type, $nb_enfant) {
    $heure = ceil($heure);
    if ($type = "ponctuelle") {
        $money = $heure * (7 + ($nb_enfant - 1) * 4);
        return $money;
    } elseif ($type = "langues") {
        $money = $heure * 15 * $nb_enfant;
        return $money;
    } else {
        $money = $heure * (10 + ($nb_enfant - 1) * 5);
        return $money;
    }
}
