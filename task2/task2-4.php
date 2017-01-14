<?php
$n = "0";

function dec2bin($n) {
    $n = (int) $n;
    $n = abs($n);
    $bin = "";
    while ($n != 0) {
        $bin = ($n % 2) . $bin;
        $n = (int)($n / 2);
        
    }
    return $bin;
};

echo dec2bin("17"); // 10001
?>



<?php
function bin2dec($bin = "0") {
    $length = strlen($bin);
    $dec = 0;
    for($i = 0;$i < $length; $i++) {
        $dec += (int)$bin[$i] * pow(2, $length - $i - 1);
    }
    return $dec;
}

echo bin2dec("10001"); // 17
?>