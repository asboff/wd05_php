<?php

//Task 1. Найти все положительные элементы массива

    $numbers = [1, 4, -7, 12, 8, 12, -3, 1, -11, -1, 0, 0];
    $numbersPos = [];
    foreach ($numbers as $number){
        if ($number > 0){
            $numbersPos[] = $number;
        };
    };
    echo '<pre>';
    print_r ($numbersPos);
    echo '</pre>';

//Task 2. Найти элементы массива, которые больше среднеарифметического значения, и вывести их индексы

    $numbersAver = array_sum ($numbers) / count ($numbers);
    foreach ($numbers as $key => $number){
        if ($number > $numbersAver){
            echo $key.' ';
        };
    };
    echo '<br>';

//Task 3. Вывести элементы массива, которые больше предыдущего

    $numberPrev = max($numbers) + 1;
    foreach ($numbers as $number){
        if ($number > $numberPrev){
            echo $number.' ';
        };
        $numberPrev = $number;
    }
    echo '<br>';

//Task 4. Определить, есть ли в массиве повторяющиеся элементы

    $newArr = [];
    foreach ($numbers as $number){
        if (in_array($number, $newArr) == true){
            echo 'Есть повторяющиеся элементыыыыыы';
            break;
        };
        $newArr[] = $number;
    }
    if ($numbers == $newArr){
        echo "Нет повторяющихся элементов";
    }
    echo '<br>';

//Task 5. Удалить в массиве элементы, которые встречаются более двух раз

    $newArr = [];
    foreach ($numbers as $key => $number){
        if (in_array($number, $newArr) == true){
            unset($numbers[$key]);
        };
        $newArr[] = $number;
    };
    echo '<pre>';
    print_r ($numbers);
    echo '</pre>';

//Task 6. Определите, является ли массив двумерным

    $arr = [
        1,
        4,
        [
            5, 7
        ],
        8
        ];
    $arrMulti = false;
    foreach ($arr as $key => $item){
        if (is_array($item) == true){
            echo 'Является двумерным';
            $arrMulti = true;
            break;
        }
    };
    if ($arrMulti == false){
        echo 'Не является двумерным';
    };

//Task 7. Вывести таблицу умножения
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table style="border: 1px solid">
        <tr style="border: 1px solid">
            <?php for ($a = 1; $a <= 10; $a++){?>
                <th><?php echo $a ?></th>
            <?php }?>
        </tr>
        <?php for ($a = 2; $a <=10; $a++){?>
            <tr>
                <?php for ($b = 1; $b <= 10; $b++){?>
                    <td><?php echo $a * $b ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>

