<?php

// 6. Сделайте класс Driver (Водитель), который будет наследоваться от класса Worker из предыдущей задачи. Этот метод
// должен вносить следующие private поля: водительский стаж, категория вождения (A, B, C).

include_once 'Worker2.php';

class Driver extends Worker2
{
    private $drivingExp;
    private $drivingCategory;
}