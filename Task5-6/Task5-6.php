<?php

/* Сделайте класс User, в котором будут следующие protected поля - name (имя), age (возраст), public методы setName,
getName, setAge, getAge.

Сделайте класс Worker, который наследует от класса User и вносит дополнительное private поле salary (зарплата),
а также методы public getSalary и setSalary.

Создайте объект этого класса 'Иван', возраст 25, зарплата 1000. Создайте второй объект этого класса 'Вася', возраст 26,
зарплата 2000. Найдите сумму зарплата Ивана и Васи.

Сделайте класс Student, который наследует от класса User и вносит дополнительные private поля стипендия, курс,
а также геттеры и сеттеры для них.
*/

require('User.php');
require('Worker.php');

$worker = new Worker();
$worker -> setName ('Иван');
$worker -> setAge(25);
$worker -> setSalary (1000);

$worker2 = new Worker();
$worker2 -> setName ('Вася');
$worker2 -> setAge(26);
$worker2 -> setSalary (2000);

$sumSalary = $worker->getSalary() + $worker2->getSalary();

echo 'Сумма зп Ивана и Васи' . $sumSalary;
