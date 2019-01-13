<?php

require 'Form.php';

$form = new Form;

echo $form->open(['action'=>'Task7.php', 'method'=>'POST']);
echo $form->input(['type'=>'text', 'name'=>'name', 'placeholder'=>'Логин']);
echo $form->password(['type'=>'password', 'name'=>'password', 'placeholder'=>'••••••']);
echo $form->textarea(['type' => 'text', 'name'=>'field', 'placeholder'=>'Введите_текст']);
echo $form->submit(['type'=>'submit', 'value'=>'Оставить_отзыв']);
echo $form->close([]);

