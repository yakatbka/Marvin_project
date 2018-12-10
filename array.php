<?php
$a = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
var_dump($a);

$a[]='вм';
var_dump($a);

var_dump($a[2]);
var_dump($a); '<br>';
$a[2]='среда';
var_dump($a); $a[2];