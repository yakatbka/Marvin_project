<?php
/*
Создайте класс SmartForm, который будет наследовать от Form из предыдущей задачи и сохранять значения инпутов и textarea
после отправки.
То есть если мы сделали форму, нажали на кнопку отправки - то значения из инпутов не должны пропасть.
Мало ли что-то пойдет не так, например, форма некорректно заполнена, а введенные данные из нее пропали и их следует
вводить заново. Этого следует избегать.
 */

require 'Form.php';

class SmartForm extends Form
{

    public function input($array)
    {
        if(isset($_REQUEST['login'])){
            $array['value'] = $_REQUEST['login'];
        }
        return parent::input($array);
    }


    public function password($array)
    {
        if (isset($_REQUEST['password'])){
            $array['value'] = $_REQUEST['password'];
        }
        return parent::password($array);
    }

    public function textarea($array)
    {
        if(isset($_REQUEST['text'])){
            $array['value'] = $_REQUEST['text'];
        }
        return parent::textarea($array);
    }

}