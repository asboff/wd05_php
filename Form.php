<?php

// 7. Создайте класс Form - оболочку для создания форм. Он должен иметь методы input, submit, password, textarea, open,
// close. Каждый метод принимает массив атрибутов.

class Form
{
    public function input (array $arr){
        $str = '';
        foreach ($arr as $key => $atr){
            $str = $str.' '."$key='$atr'";
        }
        return "<input $str>";
    }

    public function password (array $arr){
        $str = '';
        foreach ($arr as $key => $atr){
            $str = $str.' '."$key='$atr'";
        }
        return "<input type='password' $str>";
    }

    public function submit (array $arr){
        $str = '';
        foreach ($arr as $key => $atr){
            $str = $str.' '."$key='$atr'";
        }
        return "<input type='submit' $str>";
    }

    public function open (array $arr){
        $str = '';
        foreach ($arr as $key => $atr){
            $str = $str.' '."$key='$atr'";
        }
        return "<form $str>";
    }

    public function close(){
        echo "</form>";
    }
}