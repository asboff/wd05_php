<?php

// 9. Создайте класс Cookie - оболочку над работой с куками. Класс должен иметь следующие методы: установка куки set(имя
// куки, ее значение), получение куки get(имя куки), удаление куки del(имя куки).

class Cookie
{
    public function set($name, $value){
        setcookie($name, $value);
    }

    public function get($name){
        if ($_COOKIE[$name]){
            return $_COOKIE[$name];
        }
    }

    public function del($name){
        unset($_COOKIE[$name]);
        setcookie($name, null, -1, '/');
    }
}