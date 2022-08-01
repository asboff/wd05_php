<?php

class Worker
{
// 1. Сделайте класс Worker, в котором будут следующие public поля - name (имя), age (возраст), salary (зарплата).
// Создайте объект этого класса, затем установите поля в следующие значения (не в __construct, а для созданного объекта)
// - имя 'Иван', возраст 25, зарплата 1000. Создайте второй объект этого класса, установите поля в следующие значения -
// имя 'Вася', возраст 26, зарплата 2000. Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму
// возрастов Ивана и Васи.
//
//    public $name;
//    public $age;
//    public $salary;

// 2. Сделайте класс Worker, в котором будут следующие private поля - name (имя), age (возраст), salary (зарплата) и
// следующие public методы setName, getName, setAge, getAge, setSalary, getSalary. Создайте 2 объекта этого класса:
// 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000. Выведите на экран сумму зарплат Ивана и Васи.
// Выведите на экран сумму возрастов Ивана и Васи.

    private $name;
    private $age;
    private $salary;

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

//    public function setAge($age)
//    {
//        $this->age = $age;
//    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

// 3. Дополните класс Worker из предыдущей задачи private методом checkAge, который будет проверять возраст на
// корректность (от 1 до 100 лет). Этот метод должен использовать метод setAge перед установкой нового возраста (если
// возраст не корректный - он не должен меняться).

    private function checkAge($age){
        if ($age >= 1 && $age <= 100){
            return true;
        } else{
            echo 'Error while setting age.';
            return false;
        }
    }

    public function setAge($age)
    {
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }

 // 4. Сделайте класс Worker, в котором будут следующие private поля - name (имя), salary (зарплата). Сделайте так,
 // чтобы эти свойства заполнялись в методе __construct при создании объекта (вот так: new Worker(имя, возраст) ).
 // Сделайте также public методы getName, getSalary. Создайте объект этого класса 'Дима', возраст 25, зарплата 1000.
 // Выведите на экран произведение его возраста и зарплаты.

    public function __construct($name, $age, $salary){
        $this->setName($name);
        $this->setAge($age);
        $this->setSalary($salary);
    }

}

// Задания, начиная с 5, в классе Worker2, дабы не загромождать Worker