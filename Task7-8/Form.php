<?php

/*
 *  Создайте класс Form - оболочку для создания форм. Он должен иметь методы input, submit, password, textarea, open,
 * close. Каждый метод принимает массив атрибутов.
 * Для решения задачи сделайте private метод, который параметром будет принимать массив, например,
 * ['type'=>'text', 'value'=>'!!!'] и делать из него строку с атрибутами, в нашем случае type="text" value="!!!".
 */

class Form
{

    public $array;

    private function getArray($array)
    {
        $item = '';
        foreach($array as $key => $val)
        {
            $item.= $key.' = '. $val . ' ';

        }
        return  $item;

    }


    public function open($array)
    {
        $array = $this->getArray($array);
        return '<form' . '='.$array. '>';
    }

    public function input($array)
    {
        $input = $this->getArray($array);
        return '<input ' . $input. '><br><br>';
    }

    public function password($array)
    {
        $array = $this->getArray($array);
        return "<input " . $array. "><br>";

    }

    public function textarea($array)
    {
        $array = $this->getArray($array);
        return "<br><textarea {$array} ></textarea><br><br>";
    }

    public function submit($array)
    {
        $array = $this->getArray($array);
        return "<input " . $array. " ><br>";
    }

    public function close($array)
    {
        $array = $this->getArray($array);
        return "<br></form >";
    }
}
