<?php

/* Задача 2.  Сделайте класс Worker, в котором будут следующие private поля - name (имя), age (возраст),
salary (зарплата) и следующие public методы setName, getName, setAge, getAge, setSalary, getSalary.
Создайте 2 объекта этого класса: 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000.
Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.

Задача 3. Дополните класс Worker из предыдущей задачи private методом checkAge, который будет проверять возраст
на корректность (от 1 до 100 лет). Этот метод должен использовать метод setAge перед установкой нового возраста
(если возраст не корректный - он не должен меняться).
*/


header('Content-Type: text/plain; charset=utf-8');
require 'Worker.php';

$worker = new Worker();
$worker->setName('Иван');
$worker->setAge(25);
$worker->setSalary(1000);

$worker2 = new Worker();
$worker2->setName ('Вася');
$worker2->setAge (126);
$worker2->setSalary (2000);

$sumSalary = $worker->getSalary() + $worker2->getSalary();
$sumAge = $worker->getAge() + $worker2->getAge();

echo "Сумма зарплат Ивана и Васи: $sumSalary\n";
echo "Сумма возрастов Ивана и Васи: $sumAge\n";
