<?php

namespace App;

use App\Service\Mailer;
use App\Service\Saver;
use App\Storage\Database;
use App\Storage\File;

class Kernel
{
    public function run ()
    {
       header ('Content-Type: text/plain');

       if (empty($_COOKIE ['visits'])) {
           $_COOKIE ['visits'] = 0;
       }

       $_COOKIE ['visits']++;

       //setcookie('test', 'test value', strtotime('+1 month'));
       //setcookie('test', ' ', time ()); - удалить куки временем сейчас
       //echo 'cookie test: ' . $_COOKIE ['test'];

        setcookie('visits', $_COOKIE ['visits'], strtotime('+1 month'));
        //setcookie('visits', '', time());

        if ($_COOKIE ['visits'] == 2 || $_COOKIE ['visits'] == 3 || $_COOKIE ['visits'] == 4) {
            echo 'Вы открыли страницу: ' . $_COOKIE ['visits'] . ' раза';
        } else {
            echo 'Вы открыли страницу: ' . $_COOKIE ['visits'] . ' раз';
        }

    }
}