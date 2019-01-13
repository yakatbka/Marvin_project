<?php
/*
Создайте класс SmartForm, который будет наследовать от Form из предыдущей задачи и сохранять значения инпутов и textarea
после отправки.
То есть если мы сделали форму, нажали на кнопку отправки - то значения из инпутов не должны пропасть.
Мало ли что-то пойдет не так, например, форма некорректно заполнена, а введенные данные из нее пропали и их следует
вводить заново. Этого следует избегать.
 */

require 'SmartForm.php';

$form = new SmartForm();

echo $form->open(['action'=>'Task8.php', 'method'=>'POST']);
echo $form->input(['type'=>'text', 'name'=>'login', 'placeholder'=>'Логин']);
echo $form->password(['type'=>'password', 'name'=>'password', 'placeholder'=>'••••••']);
echo $form->textarea(['name' => 'text', 'placeholder'=>'Введите_текст' ]);
echo $form->submit(['type'=>'submit', 'value'=>'Оставить_отзыв']);
echo $form->close([]);