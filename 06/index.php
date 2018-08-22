<?php

echo "<table border=\"1\" cellpadding=\"10\" align=\"center\">";

for ($i = 1; $i <= 10; $i++) {
    echo "<tr border=\"1\">";
    for ($j = 1; $j <= 10; $j++) {
        echo "<td align=\"center\">";
        if (($i % 2 == 0) && ($j % 2 == 0)) {
            echo "(" . $j * $i . ")";
        } elseif (($i % 2 != 0) && ($j % 2 != 0)) {
            echo $j * $i;
        } else {
            echo "[" . $j * $i . "]";
        }
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
