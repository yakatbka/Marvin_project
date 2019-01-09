<?php

error_reporting (E_ALL);
ini_set('display_errors',1);

$values = [
    'name'=> '',
    'email'=> '',
    'password'=> '',
    'subscribe'=>0,
];

$userAdded=false;

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
    if (empty($_POST['password'])) {
        $errors['password'] = 'Введите пароль';
    }else {
        $values['password'] =$_POST['password'];
    }
    if (!empty ($_POST['subscribe'])) {
        $values ['subscribe']=1;
    }
}

if (!$errors){
    saveUser($values);
    $userAdded=true;
}


include 'form.html.php';