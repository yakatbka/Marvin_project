<?php
//Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а русские - в массив $ru.
//$arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];

$arr = array(
    'green'=>'зеленый',
    'red'=>'красный',
    'blue'=>'голубой');

foreach ($arr as $name=>$value){
    $en[] = $name;
    $ru[] = $value;
    }

echo 'Английские названия: ';
print_r ($en);

echo '<br> Русские названия: ';
print_r ($ru);
