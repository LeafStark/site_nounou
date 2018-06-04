<?php

function calculDuree($date_debut, $date_fin, $heure_debut, $heure_fin, $type) {
    $datef = strtotime($date_fin);
    $dateb = strtotime($date_debut);
    $date = (($datef - $dateb) / 3600 / 24)+1;
    $week = intval(($date + 1) / 7);
    $day = $date % 7;
    $heure = intval(str_replace(":", "", $heure_fin)) - intval(str_replace(":", "", $heure_debut));
    if ($type == "tous") {
        $heure_total = $date * $heure / 100;
        return $heure_total;
    } elseif ($type == "travailler") {


        if (date("N", $datef) < date("N", $dateb)) {

            if ((date("N", $datef) + 7 - date("N", $dateb)+1) > 1) {
                $heure_total = ($week * 5 + $day - 2) * $heure / 100;
                return $heure_total;
            } else {
                $heure_total = ($week * 5 + $day - 1) * $heure / 100;
                return $heure_total;
            }
        } else {
            if ((date("N", $datef) == 6)) {
                $heure_total = ($week * 5 + $day - 1) * $heure / 100;
                return $heure_total;
            } elseif ((date("N", $datef) == 7)) {
                $heure_total = ($week * 5 + $day - 2) * $heure / 100;
                return $heure_total;
            } else {
                $heure_total = ($week * 5 + $day) * $heure / 100;
                return $heure_total;
            }
        }
    } else {
        $type += 1;
        if ($type >= date("N", $dateb)or $type <= (date("N", $datef))) {
            $heure_total = ($week + 1) * $heure / 100;
        } else {
            $heure_total = $week * $heure / 100;
        }
    }
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


//var_dump(calculDuree('2018-06-02', '2018-06-06', '08:00', '10:00', "travailler"));
//var_dump(strtotime("2018-10-01"));
//var_dump(strtotime("2018-11-01"));

