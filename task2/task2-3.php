<?php
$arr = array (1, 2, 3, 8, 14, 89, 45);
$length = count($arr);
for ($i = 0; $i < $length; $i++) { // номер прохода проверки
    echo "I is $i\n";
    for($j = 0; $j < $length - $i - 1; $j++){// пробегаем по всему массиву, кроме последнего элемента
        if ($arr[$j] > $arr[$j + 1]){// если элемент, на который мы смотрим больше следующего
            $tmp = $arr[$j];//это три действия для обмена местами элементов
            $arr[$j] = $arr[$j+1];
            $arr[$j+1] = $tmp;//пузырек всплывает на одну позицию вверх.
        };
        echo "J is $j\n";
        print_r($arr);
    };
    echo "One pass ended";
    print_r($arr);
};
echo "Done\n";
print_r($arr);