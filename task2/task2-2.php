<?php // Вариант 1, просто оставлю его здесь!
//$arr = array (1, 2, 3, 8, 14, 89, 45);
//$arrReversed = array();

//for ($i = count($arr)-1; $i >= 0; $i--) $arrReversed[] = $arr[$i];
//for ($i = 0; $i < count($arrReversed); $i++) echo "$arrReversed[$i], "; // с зпт
//echo implode(', ', $arrReversed); // без зпт
?>



<?php // Вариант 2
$arr = array(1, 2, 3, 8, 14, 89, 45);
for ($i = 0; $i < floor(count($arr)/2); $i++) {
    $tmp = $arr[$i];
    $arr[$i] = $arr[count($arr)-$i-1];
    $arr[count($arr)-$i-1] = $tmp;
}
echo implode(', ', $arr);
?>