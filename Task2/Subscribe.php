<?php
require 'SubscribeFunctions.php';
$values = [
    'email'=> '',
    ];

$userAdded=false;
if (isset($_POST['email'])) {
    $errors = [];
    checkEmpty('email', 'Введите email');

    if (empty ($errors['email']) && strpos($_POST['email'], '@') === false) {
        $errors['email'] = 'Email должен содержать @';
    }

    if (!$errors){
        saveUser($values);
        $userAdded=true;
    }
}

include 'SubscribeFormHTML.php';