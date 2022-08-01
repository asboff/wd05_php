<?php

// 10. Создайте класс Session - оболочку над сессиями. Он должен иметь следующие методы: создать переменную сессии,
// получить переменную, удалить переменную сессии, проверить наличие переменной сессии. Сессия должна стартовать
// (session_start) в методе __construct.

class Session
{
    public function __construct($options = []){
        session_start($options);
    }

    public function createId($prefix = ''){
        session_id($id = null);
    }

    public function geiId($id = null){
        if ($_SESSION[$id]) {
            return session_id($id);
        }
    }

    public function deleteId(){
        session_unset();
    }

    public function existId($id = null){
        if ($_SESSION[$id]){
            return true;
        } else{
            return false;
        }
    }
}