<?php

        $file = fopen( 'users.txt', 'r');
        while (!feof($file)){
            $handle[] =fgets($file);
        }
        fclose($file);

        foreach ($handle as $value){
            $arrarr = explode("\t",$value);
            $arr [] = $arrarr;
        }

        foreach ($arr as $user){
            foreach ($user as $item => $value1) {

            }
        }


        include 'table.html.php';

