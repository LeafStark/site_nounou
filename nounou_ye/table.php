<?php

function table($type, $debut, $fin) {
    $t = $type;
    $d = $debut;
    $f = $fin;
    $d = intval($d);
    $f = intval($f);
    if ($t == "tous") {
        echo "<table border=1>";
        echo "<tr><th>Heure\Semaine</th><td>Lundi</td><td>Mardi</td><td>Mercredi</td><td>Jeudi</td><td>Vendredi</td><td>Samedi</td><td>Dimanche</td></tr>";
        echo "<tr><th>08:00-10:00</th>";
        for ($i = 0; $i < 7; $i++) {
            if ($d <= 8 and $f >= 10) {
                echo "<td bgcolor='red'>";
            } else {
                echo"<td bgcolor='green' />";
            }
        }
        echo "</tr>";
        echo "<tr><th>10:00-12:00</th>";
        for ($i = 0; $i < 7; $i++) {
            if ($d <= 10 and $f >= 12) {
                echo "<td bgcolor='red'>";
            } else {
                echo"<td bgcolor='green' />";
            }
        }
        echo "<tr><th>12:00-14:00</th>";
        for ($i = 0; $i < 7; $i++) {
            if ($d <= 12 and $f >= 14) {
                echo "<td bgcolor='red'>";
            } else {
                echo"<td bgcolor='green' />";
            }
        }
        echo "<tr><th>14:00-16:00</th>";
        for ($i = 0; $i < 7; $i++) {
            if ($d <= 14 and $f >= 16) {
                echo "<td bgcolor='red'>";
            } else {
                echo"<td bgcolor='green' />";
            }
        }
        echo"</tr>";
        echo "<tr><th>16:00-18:00</th>";
        for ($i = 0; $i < 7; $i++) {
            if ($d <= 16 and $f >= 18) {
                echo "<td bgcolor='red'>";
            } else {
                echo"<td bgcolor='green' />";
            }
        }
        echo"</tr>";
        echo "</table>";
    } elseif ($t == 'travailler') {
        echo "<table border=1>";
        echo "<tr><th>Heure\Semaine</th><td>Lundi</td><td>Mardi</td><td>Mercredi</td><td>Jeudi</td><td>Vendredi</td><td>Samedi</td><td>Dimanche</td></tr>";
        echo "<tr><th>08:00-10:00</th>";
        for ($i = 0; $i < 7; $i++) {
            if ($d <= 8 and $f >= 10 and $i < 5) {
                echo "<td bgcolor='red'>";
            } else {
                echo"<td bgcolor='green' />";
            }
        }
        echo "</tr>";
        echo "<tr><th>10:00-12:00</th>";
        for ($i = 0; $i < 7; $i++) {
            if ($d <= 10 and $f >= 12 and $i < 5) {
                echo "<td bgcolor='red'>";
            } else {
                echo"<td bgcolor='green' />";
            }
        }
        echo "<tr><th>12:00-14:00</th>";
        for ($i = 0; $i < 7; $i++) {
            if ($d <= 12 and $f >= 14 and $i < 5) {
                echo "<td bgcolor='red'>";
            } else {
                echo"<td bgcolor='green' />";
            }
        }
        echo "<tr><th>14:00-16:00</th>";
        for ($i = 0; $i < 7; $i++) {
            if ($d <= 14 and $f >= 16 and $i < 5) {
                echo "<td bgcolor='red'>";
            } else {
                echo"<td bgcolor='green' />";
            }
        }
        echo"</tr>";
        echo "<tr><th>16:00-18:00</th>";
        for ($i = 0; $i < 7; $i++) {
            if ($d <= 16 and $f >= 18 and $i < 5) {
                echo "<td bgcolor='red'>";
            } else {
                echo"<td bgcolor='green' />";
            }
        }
        echo"</tr>";
        echo "</table>";
    } else {
        $t = intval($t);
        echo "<table border=1>";
        echo "<tr><th>Heure\Semaine</th><td>Lundi</td><td>Mardi</td><td>Mercredi</td><td>Jeudi</td><td>Vendredi</td><td>Samedi</td><td>Dimanche</td></tr>";
        echo "<tr><th>08:00-10:00</th>";
        for ($i = 0; $i < 7; $i++) {
            if ($d <= 8 and $f >= 10 and $i == $t) {
                echo "<td bgcolor='red'>";
            } else {
                echo"<td bgcolor='green' />";
            }
        }
        echo "</tr>";
        echo "<tr><th>10:00-12:00</th>";
        for ($i = 0; $i < 7; $i++) {
            if ($d <= 10 and $f >= 12 and $i == $t) {
                echo "<td bgcolor='red'>";
            } else {
                echo"<td bgcolor='green' />";
            }
        }
        echo "<tr><th>12:00-14:00</th>";
        for ($i = 0; $i < 7; $i++) {
            if ($d <= 12 and $f >= 14 and $i == $t) {
                echo "<td bgcolor='red'>";
            } else {
                echo"<td bgcolor='green' />";
            }
        }
        echo "<tr><th>14:00-16:00</th>";
        for ($i = 0; $i < 7; $i++) {
            if ($d <= 14 and $f >= 16 and $i == $t) {
                echo "<td bgcolor='red'>";
            } else {
                echo"<td bgcolor='green' />";
            }
        }
        echo"</tr>";
        echo "<tr><th>16:00-18:00</th>";
        for ($i = 0; $i < 7; $i++) {
            if ($d <= 16 and $f >= 18 and $i == $t) {
                echo "<td bgcolor='red'>";
            } else {
                echo"<td bgcolor='green' />";
            }
        }
        echo"</tr>";
        echo "</table>";
    }
}

//table("1","10:00","13:00");
?>