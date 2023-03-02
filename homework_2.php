<?php
// 1 *Создать переменную $number = '25'; Привести эту строку к типу integer 4-6-ю разными способами.
$number = '25';

var_dump(intval($number));
echo '</br>';

var_dump(+$number);
// var_dump($number+0);
echo '</br>';

settype($number, 'integer');
var_dump($number);
echo '</br>';

var_dump((int)$number);
echo '</br>';

var_dump($number * 1);
// var_dump($number/1);
echo '</br>';

var_dump(json_decode($number));
echo '</br>';
echo '</br>';
// 2 Создать переменную $longString = 'ThisIsVeryLongString';
$longString = 'ThisIsVeryLongString';

// 2.1* - Вычислить длину строки и вывести на экран
echo strlen($longString);
echo '</br>';

// 2.2 - Вывести первый и последний символы
echo $longString[0];
echo substr($longString, 0, 1);

echo $longString[-1];
echo substr($longString, -1);
echo '</br>';

// 2.3** - Поменять местами первый и последний символы, сохранить в новую переменную, вывести на экран.
$newString = $longString[-1] . substr(substr($longString, 1), 0, -1) . $longString[0];
echo $newString;
echo '</br>';
echo '</br>';

//3 Создать 2 любые переменные типа integer.
$num1 = 42;
$num2 = 34;

// 3.1 - Изменить значение 1-й переменной, на сумму этих переменных
// $num1 = $num1 + $num2;
echo $num1 = $num1 + $num2;
echo '</br>';

// 3.2 - Изменить значение 1-й переменной, на сумму этих переменных коротким присваиванием
echo $num1 += $num2;
echo '</br>';
echo '</br>';
// 4 С помощью var_dump(); вывести на экран результат проверки (существует ли переменная $shortString)
var_dump((boolval($shortString)));
echo '</br>';
echo '</br>';

// 5 Создать переменную типа integer, с любым значением
$num = 42;

// 5.1 - Вывести на экран ее удвоенное значение только в том случае, есть ее значение больше 20
if ($num > 20) {
    echo  $num * 2;
};
echo '</br>';
// 5.2 - Вывести на экран ее значение уменьшенное в 2 раза только в том случае, если ее значение меньше либо равно 20
if ($num <= 20) {
    echo $num / 2;
};
echo '</br>';
// 5.3* - Вывести на экран строку 'Да, это integer', если тип переменной является integer
if (is_int($num)) {
    echo 'Да, это integer';
};
echo '</br>';
echo '</br>';

// 6 Создать переменную строкового типа
$myString = "уруру";

// 6.1 - Проверить ее значение на истину с помощью булевого типа true
echo $myString == true;
echo '</br>';

// 6.2 - Проверить ее значение на ложь с помощью булевого типа
echo $myString == false;
echo '</br>';

// 6.3** - Проверить ее значение на ложь, при этом не использую в условии (==, ===, true, false)
echo boolval($myString);
echo '</br>';
echo '</br>';

// 7 Реализовать любое условие if, которое будет содержать в себе не менее 4 условий (Чем сложнее придумаете, тем лучше)
$myCity = "Запоріжжя";
if (is_string($myCity) && strlen($myCity) >= 9 && !is_numeric(($myCity) && $myCity[0] === "З")) {
    echo "it is fine!";
} else {
    echo "so sad";
};
echo '</br>';
echo '</br>';
// 8 Перечислить разницу между строгим и нестрогим сравнением. Подсказка == && ===

// == сравнивае значение.Например, true(bool) будет равно "true"(строка)
// ===  сравнивает и значние, и тип. 5+4 === 9. но "9" не будет равно 9

