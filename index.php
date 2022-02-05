<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

echo "Задание 1. Если переменная \$a пустая, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при \$a, равном 1, 3, -3, 0, null, true, '', '0'. */<br /> <br />";

$array = [1, 3, -3, 0, null, true, '', '0'];

for ($i = 0; $i < count($array); $i++) {

    if (!empty($array[$i])) {
        echo $array[$i] . ' - Верно' . '<br />';
    } else {
        echo $array[$i] . ' - Неверно' . '<br />';
    }
}

echo '<hr /> <br />';


/* 2. Дано трехзначное число. Поменяйте среднюю цифру на ноль. */

$numb = 155;

$numb = (string) $numb;

$numb[1] = 0;

$numb = (int) $numb;

echo $numb;

echo '<br />';


/* 3. Если переменная $a равна или меньше 1, а переменная $b больше или 
равна 3, то выведите сумму этих переменных, иначе выведите их разность 
(результат вычитания). Проверьте работу скрипта при $a и $b, равном 1 и 3, 0
и 6, 3 и 5. */

function task3($a, $b) {

    if ($a <= 1 && $b >= 3) echo $a + $b;
    else echo $a - $b;
}

task3(1, 3);
echo '<br />';
task3(0, 6);
echo '<br />';
task3(3, 5);
echo '<br />';


/* 4. Дана строка с символами, например, 'abcde'. Проверьте, что первым 
символом этой строки является буква 'a'. Если это так - выведите 'да', в 
противном случае выведите 'нет'. */

$str = 'abcde';

if ($str[0] == 'a') echo 'да';
else echo 'нет';

echo '<br />';

// или

switch ($str) {

    case ($str[0] == 'a'):
        echo 'да';
        break;
    default:
        echo 'нет';
}

echo '<br />';


/* 5. Дана строка из 6-ти цифр. Проверьте, что сумма первых трех цифр 
равняется сумме вторых трех цифр. Если это так - выведите 'да', в противном 
случае выведите 'нет'. */

$numb = 252272;

$numb = str_split($numb);

$count1 = 0;
$count2 = 0;

for ($i = 0; $i < count($numb); $i++) {

    if ($i < 3) $count1 += $numb[$i];
    if ($i >= 3 && $i < 6 ) $count2 += $numb[$i];
}

switch ($count1 == $count2) {

    case true:
        echo 'да';
        break;
    default: 
        echo 'нет';
}

echo '<br />';


/* 6. Разработайте программу, которая определяла количество прошедших 
часов по введенным пользователем градусах. Введенное число может быть от
0 до 360. */

function getHours ($n) {

    if ($n > 0 && $n <= 360) {

        $n = (12/360)* $n; 

        switch ($n) {
            case ($n > 0 && $n < 0.5):
                echo 'Прошло до получаса';
            break;
            case ($n >= 0.5 && $n < 1.5):
                echo round($n) . ' час';
            break;
            case ($n >= 1.5 && $n < 4.5):
                echo round($n) . ' часа';
            break;
            case ($n >= 4.5 && $n <= 12):
                echo round($n) . ' часов';
            break;     
        }
    }
}

getHours(5);

echo '<br />';


/* 7. Разработайте программу, которая из чисел 20 .. 45 находила те, которые 
делятся на 5 и найдите сумму этих чисел. */

function task7($i = 20, $z = 45, $count7 = 0) {

for ($i; $i <= $z; $i++) {

    if ($i % 5 == 0) $count7 += $i;
}

echo $count7;

}

task7();

echo '<br />';


/* 8. Дано пятизначное число. Цифры на четных позициях «занулить». 
Например, из 12345 получается число 10305. */

$task8 = '12345';

function ftask8($numb, $numb2 = '', $count = 0) { 

    if (!($numb[$count] % 2)) $numb[$count] = 0;
    
    $numb2 .= $numb[$count];
    
    $count++;

    if ($count >= strlen($numb)) return $numb2;

    return ftask8($numb, $numb2, $count);
}

echo ftask8($task8);

echo '<br />';


/* 9. Дано число $num=1000. Делите его на 2 столько раз, пока результат 
деления не станет меньше 50. Какое число получится? Посчитайте 
количество итераций, необходимых для этого (итерация - это проход цикла). 
Решите задачу сначала через цикл while, а потом через цикл for. */

$num = 1000;

$sch = 0;

while ($num > 50) {

    $sch++;
    $num /= 2;
}

echo $sch;
echo '<br />';
echo $num;

echo '<br />';

// или

$num = 1000;
$sch = 0;

for (; $num > 50; $num /= 2) { $sch++; };

echo $sch;

echo '<br />';


/* 10. Вывести на экран фигуру из звездочек:
*******
*******
*******
*******
(квадрат из n строк, в каждой строке n звездочек) */

function task10($n1, $n2) {

    for ($i = 0; $i < $n1; $i++) {

        for ($j = 0; $j < $n2 ; $j++) {

            echo '*';
        }

        echo "<br />";
    }
}

?>

</body>
</html>