<?php


    $file_name = "users.txt";
    $data = file($file_name);
?>
        <table border="1">
            <tr>
                <th>Имя</th>
                <th>Email</th>
                <th>Пароль</th>
                <th>Подписка</th>
            </tr>
            <?php

            foreach( $data as $value ) :

                $value = explode( "\t", $value );
            ?>

                <tr>
                <td><?=$value[0]?></td>
                <td><?=$value[1]?></td>
                <td><?=$value[2]?></td>
                <td><?=$value[3]?></td>
            </tr>
            <?php
            endforeach;
        ?>
        </table>





