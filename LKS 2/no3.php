<?php

for ($i=1; $i < 30; $i++) {
    if (120 % $i == 0) {
        echo "120 : $i = " .round(120 / $i) . "<br>";
    }
}
?>