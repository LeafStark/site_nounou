<?php

function table_max_id($db, $table, $att) {
    $req_max = "select IFNULL(max(" . $att . "),0)+1 as L_ID from " . $table;
    $response = $db->query($req_max);
    if ($response === false) {
        $err_infos = $db->errorInfo();
        echo "Error";
        return false;
    } else {
        $tab_res = $response->fetch(PDO::FETCH_ASSOC);
        return $tab_res['L_ID'];
    }
}
