<?php

require 'functions.php';

$values = [
    'name'=> '',
    'email'=> '',
    'password'=> '',
    'ok'=>0,
];

if (isset($_POST['name'])){
    $errors=[];

    if (empty($_POST['name'])){
        $errors['name']='Введите имя';
    } else {
        $values['name'] =$_POST['name'];
    }

    if (empty($_POST['email'])) {
        $errors['email'] = 'Введите email';
    } else {
        $values['email'] =$_POST['email'];
    }
    if (strpos($_POST['email'],'@') ===false)        {
        $errors['email']= 'Email должен содержать @';
    }


if (empty($_POST['email'])) {
    $errors['password'] = 'Введите пароль';
}else {
    $values['password'] =$_POST['password'];
}

if (!empty ($_POST['ok'])) {
    $values ['ok']=1;
}
}

include 'form.html.php';