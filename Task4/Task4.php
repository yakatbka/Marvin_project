<?php
/*
 * Задача 4. Сделайте класс Worker, в котором будут следующие private поля - name (имя), salary (зарплата).
 * Сделайте так, чтобы эти свойства заполнялись в методе __construct при создании объекта (вот так:
 * new Worker(имя, возраст) ). Сделайте также public методы getName, getSalary.
Создайте объект этого класса 'Дима', возраст 25, зарплата 1000. Выведите на экран произведение его возраста и зарплаты.
 */

header('Content-Type: text/plain; charset=utf-8');
require 'Worker.php';

$worker = new Worker('Дима',25, 1000);

$agesalary= $worker->getAge() * $worker->getSalary();

echo 'Произведение возраста и зп Димы: ' . $agesalary;
