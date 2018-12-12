<?php
require 'functions.php';

$values = [
    'name'=> '',
    'email'=> '',
    'password'=> '',
    'ok'=>0,
];
$userAdded=false;

if (isset($_POST['name'])) {
    $errors = [];

    checkEmpty('name', 'Введите имя');
    checkEmpty('email', 'Введите email');
    checkEmpty('name', 'Введите пароль');

    if (empty ($errors['email']) && strpos($_POST['email'], '@') === false) {
        $errors['email'] = 'Email должен содержать @';
    }

    if (!empty ($_POST['ok'])) {
        $values ['ok']=1;
    }
    if (!$errors){
        saveUser($values);
        $userAdded=true;
    }
}

include 'form.html.php';
