<!DOCTYPE html>
<html lang="ru">
<head>

   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP_3</title>
   
</head>
<body>

<?php



// Задание 1

echo 'Задание 1. Функция, возвращающая куб числа <br><br>';

function task_1($a = 0) {
    $result_1 = $a * $a * $a;
    echo 'Куб числа ' . $a . ' = ' . $result_1;
}

task_1(4);

// Задание 2

echo '<hr> Задание 2. Функция, которая возвращает сумму двух чисел <br><br>';

function task_2 ($a = 0, $b = 0) {
    $result_2 = $a + $b;
    echo $a . ' + ' . $b . ' = ' . $result_2; 
}

task_2(15, 37);

// Задание 3

echo '<hr> Задание 3. Число - День недели <br><br>';

function task_3($a) {
    switch($a) {
        case '1':
            echo "{$a} - Понедельник";
        break;
        case '2':
            echo "{$a} - Вторник";
        break;
        case '3':
            echo "{$a} - Среда";
        break;
        case '4':
            echo "{$a} - Четверг";
        break;
        case '5':
            echo "{$a} - Пятница";
        break;
        case '6':
            echo "{$a} - Суббота";
        break;
        case '7':
            echo "{$a} - Воскресенье";
        break;
        default: echo "1 - Понедельник";
    }
}

task_3(8);

// Задание 4

echo '<hr> Задание 4. Положительное - true, отрицательное - false <br><br>';

function task_4($a) {
    if ($a >= 0) {
        return 'true';
    }
    else return 'false';
}

echo task_4(8);

// Задание 5

echo '<hr> Задание 5. Функция, возвращающая сумму цифр числа <br><br>';

function getDigitsSum($a) {
    $sum_5 = 0;
    $a = (string)$a;
    for ($i = 0; ; $i++) {
        if (isset($a[$i])) {
            $sum_5 += $a[$i];
        }
        else break;
    }
    return $sum_5;
}

$result_5 = getDigitsSum(562);
echo 'Сумма цифр числа = ' . $result_5;

// Задание 6

echo '<hr> Задание 6. Все года от 1 до 2020, сумма цифр которых равна 13 <br><br>';

function task_6() {
    $r = 0;
    $arr_6 = [];
    for ($i = 1; $i <= 2020; $i++) {
        if (getDigitsSum($i) == 13) {
            $arr_6[$r] = $i;
            $r++;
        }
    }
    return $arr_6;
}

$result_6 = task_6();

echo '<pre>';
print_r($result_6);
echo '</pre>';

// Задание 7

echo '<hr> Задание 7. Функция, проверяющая на чётность <br><br>';

function isEven($a) {
    if ($a % 2 == 0) {
        return 'true';
    }
    else return 'false';
}

echo isEven(55);

// Задание 8   Не доделано

echo '<hr> Задание 8. Русские слова показывает транслитом <br><br>';

function task_8($a) {
    $result_8 = '';
    for ($i = 0; isset($a[$i]); $i++) {
        $n = $a[$i];
        switch ($n) {
            case 'а':
                $result_8[$i] = 'a';
            break;
            case 'б':
                $result_8[$i] = 'b';
            break;
            case 'в':
                $result_8[$i] = 'v';
            break;
            case 'г':
                $result_8[$i] = 'g';
            break;
            case 'д':
                $result_8[$i] = 'd';
            break;
            case 'е':
                $result_8[$i] = 'e';
            break;
        }
    }
    return $result_8;
}

// echo task_8('абвгде');

// Задание 9

echo '<hr> Задание 9. Правильное окончание ( яблоко / яблока / яблок ) <br><br>';

function task_9($a, $apple_1 = 'яблоко', $apple_2 = 'яблока', $apple_3 = 'яблок') {
    if ($a % 10 == 1 && $a % 10 != 11) echo $a . ' ' . $apple_1;
    else if ($a % 100 == 12 || $a % 100 == 13 || $a % 100 == 14) echo $a . ' ' . $apple_3;
    else if ($a % 10 == 2 || $a % 10 == 3 || $a % 10 == 4) echo $a . ' ' . $apple_2;
    else echo $a . ' ' . $apple_3;
}

task_9(4521);

// Задание 10

echo '<hr> Задание 10. Вывести числа из массива рекурсией <br><br>';

function task_10($m = []) {
    static $i = 0;
    echo $m[$i] . ' ';
    $i++;
    $t = $m[$i];
    if (isset($t)) task_10($m);
}

task_10([2, 54, 6, 34, 23, 45]);

// Задание 11

echo '<hr> Задание 11. Складывать цифры числа, пока оно не станет однозначным <br><br>';

function task_11($a) {
    $a = (string)$a;
    $b = 0;
    for ($i = 0; isset($a[$i]); $i++) {
        $b += $a[$i];
    };
    $a = $b;
    if ($a >= 10) task_11($a);
    else echo $a;
}

task_11(636757663);

// Задание 12

echo '<hr> Задание 12. Рачёт скорости <br><br>';

function task_12($d, $t) {
    $result_12 = $d / $t;
    echo 'Проеденое расстояние: ' . $d . ' километров, затраченое время: ' . $t . ' часов <br>';
    echo 'Скорость: ' . round($result_12) . ' км/ч <br>';
    echo 'Скорость: ' . round($result_12 * 1000 / 3600) . ' м/с';
}

task_12(3576, 445); // километры, часы

// Задание 13   Не доделано

echo '<hr> Задание 13. Можно ли из первого слова составить второе <br><br>';

function task_13($a, $b) {
    for ($i = 0; isset($b[$i]); $i++) {
        static $result_13 = '';
        $r = $b[$i];
        for ($j = 0; isset($a[$j]); $j++) {
            $e = $a[$j];
            if ($r == $e) {
                $result_13 = $r;
            }
        }
    }
    return $result_13;
}

echo task_13('tydnjigvmevbja', 'baa');

// Задание 14

echo '<hr> Задание 14. Определить полиндром <br><br>';

function task_14($str) {
    echo $str . ' полидром? <br>';
    $stn = strrev($str);
    if ($str === $stn) {
        echo 'Верно';
    }
    else echo 'Неверно';

}

task_14('ivi');

// Задание 15

echo '<hr> Задание 15. Таблица умножения <br><br>';

function task_15($a, $b) {
    for ($i = $a; $i <= $b; $i++) {
        for ($j = $a; $j <= $b; $j++) {
            echo "{$i} * {$j} = " . $i * $j . '<br>';
        }
        echo '<br>';
    }
}

task_15(2, 10);

// Задание 16   Не доделано

echo '<hr> Задание 16. Определение самого длинного слова <br><br>';

function task_16($a) {
    static $v = '';
    for ($i = 0; isset($a[$i]); $i++) {
        if ($a[$i] === '') {
            $string_1 = $v;
        }
        else {
            echo $v = $a[$i];
        }
    }
    echo $v;
}

// task_16('Lorem ipsum, dolor sit amet consectetur adipisicing elit');

// Задание 17

echo '<hr> Задание 17. Суммарное количество единиц в числах
от 1 до 100. <br><br>';

function task_17() {
    $sum_17 = 0;
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 10 == 1) {
            $sum_17 += 1;
        }
        if ($i == 11 || $i == 100) {
            $sum_17 += 1;
        }
    }
    echo $sum_17;
}

task_17();

// Задание 18   Не доделано. Блять...

echo '<hr> Задание 18. Разбитие строки <br><br>';

function task_18($string_18) {
    for ($i = 0; $i < strlen($string_18); $i++) {
        $result_18[$i] = $string_18[$i];
    }
    print_r($result_18);
}

task_18('Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, voluptates? A molestias accusantium dolore error obcaecati aliquam itaque, vero veritatis minus quos deserunt dignissimos? Fugiat dolorum voluptas ea quo nisi?');

?>


</body>
</html>