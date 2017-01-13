<?php
$plates = 10;
$cleanser = 8;

while ($plates > 0 && $cleanser > 0) {
    $cleanser -= 0.5;
    $plates--;
    echo "Cleanser left: " . $cleanser . "," . " Plates left: " . $plates . " \n";
}

echo ($cleanser == 0) ? "Cleanser ended, $plates plates left." : "All plates were washed, $cleanser cleanser left.";

