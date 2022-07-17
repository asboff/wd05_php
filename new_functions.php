<?php

    include_once 'my_functions.php';

    // 1. Написать функцию, которая возводит число в указанную степень
    function degree ($num, $degree){
        return pow($num, $degree);
    }
    echo degree (2, 3);
    echo "<br>";

    // 2. Написать функцию, которая проверяет, являются ли все буквы в строке строчными
    function isLower (string $str){
        $strLower = strtolower($str);
        if ($str == $strLower){
            return 'true';
        } else{
            return 'false';
        }
    }
    echo isLower ('hiJack');
    echo "<br>";

    // 3. Написать функцию, которая генерирует массив указанной длинны со случайными значениями
    function randArray(int $n){
        $arr = [];
        for ($i = 1; $i <= $n; $i++){
            $arr[] = rand(0, 1000);
        }
        return $arr;
    }
    debug(randArray(10));

    // 4. Функция, которая по номеру дня возвращает его название
    function weekday (int $num){
        switch($num){
            case 1:
                return 'Понелельник';
            case 2:
                return 'Вторник';
            case 3:
                return 'Среда';
            case 4:
                return 'Четверг';
            case 5:
                return 'Пятница';
            case 6:
                return 'Суббота';
            case 7:
                return 'Воскресенье';
        }
    }
    echo weekday(4);
    echo "<br>";

    // 5. Написать функцию которая выводит n-ое число Фибоначчи
    function fibonacci ($n){
        $fibArr = [0, 1];
        for ($i = 2; $i < $n; $i++){
            $fibArr[$i] = $fibArr[$i-2] + $fibArr[$i-1];
        }
        return $fibArr[$n-1];
    }
    echo fibonacci(8);