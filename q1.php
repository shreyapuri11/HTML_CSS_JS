<?php

$rows = 5; // Change this value to adjust the size of the pattern

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo '* ';
    }
    echo "<br>";
}

?>
