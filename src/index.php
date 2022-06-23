<?php

//task 1

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

//task 2

    $numbersAver = array_sum ($numbers) / count ($numbers);
    foreach ($numbers as $key => $number){
        if ($number > $numbersAver){
            echo $key.' ';
        };
    };
    echo '<br>';

//task 3

    $numberPrev = max($numbers) + 1;
    foreach ($numbers as $number){
        if ($number > $numberPrev){
            echo $number.' ';
        };
        $numberPrev = $number;
    }
    echo '<br>';

//task 4

    $newArr = [];
    foreach ($numbers as $number){
        if (in_array($number, $newArr) == true){
            echo 'Есть повторяющиеся элементы';
            break;
        };
        $newArr[] = $number;
    }
    if ($numbers == $newArr){
        echo "Нет повторяющихся элементов";
    }
    echo '<br>';

//task 5

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

//task 6

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

//task 7
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

