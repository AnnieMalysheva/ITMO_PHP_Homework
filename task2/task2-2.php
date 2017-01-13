<?php
$arr = array (1, 2, 3, 8, 14, 89, 45);
$arrReversed = array();

for ($i = count($arr)-1; $i >= 0; $i--) $arrReversed[] = $arr[$i];
for ($i = 0; $i < count($arrReversed); $i++) echo "$arrReversed[$i], ";
