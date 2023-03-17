<?php
// 1 ** Записать любое условие с помощью тернарного оператора
$myNumber = 42;
$numberToCheck = 13;
echo $numberToCheck > $myNumber ? "Больше" : "Меньше" . "</br>";

// 1.2. ** Реализовать пункт 1 с помощью "ленивого" тернарного оператора
$biggerNumber = ($numberToCheck > $myNumber) ?: false;
echo sprintf('ururu %s </br>', $biggerNumber ? "Больше" : "Меньше");

// 3 Создать переменную $count = 0; Реализовать цикл while, от $count до 10. Нужно вывести на экран значение $count на каждой второй итерации.
$count = 0;
while ($count < 10) {
    $count++;
    echo $count % 2 ? "$count " : '';
}

// 4 ***Создать цикл for:
// 4.1 Выводить на экран fiz, если итерационная переменная делится на 2 нацело
// 4.2 Выводить на экран baz, если итерационная переменная делится на 3 нацело
// 4.3 Выводить на экран fizbaz, если итерационная переменная делится и на 2 и на 3 нацело 
echo "</br>";
for ($i = 0; $i <= 12; $i++) {
    if ($i === 0) {
        continue;
    } elseif ($i % 2 === 0 && $i % 3 === 0) {
        echo sprintf("$i fizbaz </br>");
    } elseif ($i % 2 === 0) {
        echo sprintf("$i fiz </br>");
    } elseif ($i % 3 === 0) {
        echo sprintf("$i baz </br>");
    }
}

// 5 Создать цикл for, который совершит 10 итераций. Нужно чтобы цикл вывел значения от 10 до 0
echo "</br>";
for ($i = 10; $i >= 0; $i--) {
    echo "$i </br>";
}

// 6 Создать пустой массив
$myArray = [];
// 6.1 - Построчно заполнить массив 5-ю элементами
$myArray[0] = 'Котики';
$myArray[1] = 'Енотики';
$myArray[2] = 'Песеньки';
$myArray[3] = 'Хорюшки';
$myArray[4] = 'Птичики';

// 6.2*- Перевернуть массив(найти функцию для этого)
$reversedArray = array_reverse($myArray);
var_dump($reversedArray);
echo "</br>";

//6.3 - Вывести на экран длину массива
echo sprintf("Длина массива %s </br>", count($reversedArray));
echo "</br>";


// 7 Создать массив сразу заполненный 5-ю значениями
$fullArray = [9, 8, 7, 6, 5];
// 7.1 - Заменить значение под индексом 2, на любое строковое значение
$fullArray[2] = "Уруру";
var_dump($fullArray);

// 7.2 - Вывести на экран значения массива поиндексно
foreach ($fullArray as $key => $value) {
    echo sprintf("Ключ %s, значение %s, </br>", $key, $value);
}

echo "</br>";
// 8 Создать новый массив
$result = array();
// 8.1** - Соединить массив из п.6 с массивом из п. 7 (2-мя разными способами).
var_dump(array_merge($myArray, $fullArray));

echo "</br>";
for ($i = 0; $i < count($fullArray); $i++) {
    $myArray[] = $fullArray[$i];
}
var_dump($myArray);
echo "</br>";
echo "</br>";

// 9 Создать массив у которого ключами будут числа не по порядку и значения тоже
$toSortByValues = [4=>"Уруру", 2=>"Котики", 3=>"Енотики", 5=>"Обормотики", 0=>"Птицики", 1=>"Песики"];

// 9.1**- Отсортировать массив по значениям

asort($toSortByValues);
var_dump($toSortByValues);
echo "</br>";

// 9.2**- Отсортировать массив по ключам

$toSortByKeys = [4=>"Уруру", 2=>"Котики", 3=>"Енотики", 5=>"Обормотики", 0=>"Птицики", 1=>"Песики"];
ksort($toSortByKeys);
var_dump($toSortByKeys);

