<?php

include_once 'Worker.php';
include_once 'Worker2.php';
include_once 'Form.php';
include_once 'SmartForm.php';
include_once 'my_functions.php';

// 1. Сделайте класс Worker, в котором будут следующие public поля - name (имя), age (возраст), salary (зарплата).
// Создайте объект этого класса, затем установите поля в следующие значения (не в __construct, а для созданного объекта)
// - имя 'Иван', возраст 25, зарплата 1000. Создайте второй объект этого класса, установите поля в следующие значения -
// имя 'Вася', возраст 26, зарплата 2000. Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму
// возрастов Ивана и Васи.

//$worker1 = new Worker();
//$worker1->name = 'Иван';
//$worker1->age = 25;
//$worker1->salary = 1000;
//
//$worker2 = new Worker();
//$worker2->name = 'Вася';
//$worker2->age = 26;
//$worker2->salary = 2000;
//
//echo ($worker1->age + $worker2->age).' '.($worker1->salary + $worker2->salary);

// 2. Сделайте класс Worker, в котором будут следующие private поля - name (имя), age (возраст), salary (зарплата) и
// следующие public методы setName, getName, setAge, getAge, setSalary, getSalary. Создайте 2 объекта этого класса:
// 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000. Выведите на экран сумму зарплат Ивана и Васи.
// Выведите на экран сумму возрастов Ивана и Васи.

//$worker1 = new Worker();
//$worker1->setName('Иван');
//$worker1->setAge(25);
//$worker1->setSalary(1000);
//
//$worker2 = new Worker();
//$worker2->setName('Вася');
//$worker2->setAge(26);
//$worker2->setSalary(2000);
//
//echo ($worker1->getAge() + $worker2->getAge()).' '.($worker1->getSalary() + $worker2->getSalary());

// 4. Сделайте класс Worker, в котором будут следующие private поля - name (имя), salary (зарплата). Сделайте так,
// чтобы эти свойства заполнялись в методе __construct при создании объекта (вот так: new Worker(имя, возраст) ).
// Сделайте также public методы getName, getSalary. Создайте объект этого класса 'Дима', возраст 25, зарплата 1000.
// Выведите на экран произведение его возраста и зарплаты.

$worker3 = new Worker('Дима', 25, 1000);
echo $worker3->getAge() * $worker3->getSalary();

echo "<br>";

// 5. Сделайте класс User, в котором будут следующие protected поля - name (имя), age (возраст), public методы setName,
// getName, setAge, getAge. Сделайте класс Worker, который наследует от класса User и вносит дополнительное private поле
// salary (зарплата), а также методы public getSalary и setSalary. Создайте объект этого класса 'Иван', возраст 25,
// зарплата 1000. Создайте второй объект этого класса 'Вася', возраст 26, зарплата 2000. Найдите сумму зарплата Ивана и
// Васи. Сделайте класс Student, который наследует от класса User и вносит дополнительные private поля стипендия, курс,
// а также геттеры и сеттеры для них.

$worker4 = new Worker2();
$worker4->setName('Иван');
$worker4->setAge(25);
$worker4->setSalary(1000);

$worker5 = new Worker2();
$worker5->setName('Вася');
$worker5->setAge(26);
$worker5->setSalary(2000);

echo $worker4->getSalary() + $worker5->getSalary();
echo "<br>";

// 7. Создайте класс Form - оболочку для создания форм. Он должен иметь методы input, submit, password, textarea, open,
// close. Каждый метод принимает массив атрибутов.

$form = new Form();

echo $form->open(['action'=>'', 'method'=>'POST']);
echo $form->input(['type'=>'text', 'placeholder'=>'Ваше имя', 'name'=>'name']);
echo $form->password(['placeholder'=>'Ваш пароль', 'name'=>'pass']);
echo $form->submit(['value'=>'Отправить']);
echo $form->close();

echo "<br>";

// 8. Создайте класс SmartForm, который будет наследовать от Form из предыдущей задачи и сохранять значения инпутов и textarea
// после отправки. То есть если мы сделали форму, нажали на кнопку отправки - то значения из инпутов не должны пропасть.
// Мало ли что-то пойдет не так, например, форма некорректно заполнена, а введенные данные из нее пропали и их следует
// вводить заново. Этого следует избегать.

$form2 = new SmartForm();

echo $form2->open(['action'=>'', 'method'=>'POST']);
echo $form2->input(['type'=>'text', 'placeholder'=>'Ваше имя', 'name'=>'name']);
echo $form2->password(['placeholder'=>'Ваш пароль', 'name'=>'pass']);
echo $form2->submit(['value'=>'Отправить']);
echo $form2->close();







