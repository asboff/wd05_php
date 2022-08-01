<?php

include_once 'Form.php';

// 8. Создайте класс SmartForm, который будет наследовать от Form из предыдущей задачи и сохранять значения инпутов и textarea
// после отправки. То есть если мы сделали форму, нажали на кнопку отправки - то значения из инпутов не должны пропасть.
// Мало ли что-то пойдет не так, например, форма некорректно заполнена, а введенные данные из нее пропали и их следует
// вводить заново. Этого следует избегать.

class SmartForm extends Form
{
    public function input(array $arr)
    {
        $str = '';
        foreach ($arr as $key => $atr){
            $str = $str.' '."$key='$atr'";
        }
        $name = $arr['name'];
        $str = $str." value=$_POST[$name]";
        return "<input $str>";
    }
}