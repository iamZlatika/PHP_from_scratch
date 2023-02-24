<?php
// 1 Создать 3 переменные :
//  1.1 Переменная содержит название города
$city = "м.Запоріжжя";

//  1.2 Переменная содержит название улицы
$street = "вул.Європейська";

//  1.3 Переменная содержит номер дома
$house = 20;

// 2 Вывод переменных из п.1 с помощью echo
echo "$city, $street, $house<br>";

// 3 Вывод переменных из п.1 с помощью print
print $city . ', ' . $street . ', ' . $house .  '<br>';

// 4 **Вывести переменные в одну строку с помощью echo, без использования кавычек и запятых вообще. Можно использовать только 1 echo
define('ADRESS', "$city, $street, $house<br>");
echo ADRESS;

// 5 Создать переменную содержащую ваш возраст
$age = 33; 

// 6 Вычислить кол-во месяцев с момента вашего рождения
$birthday = new DateTime('1989-03-08');
$now = new DateTime();
$interval = $now->diff($birthday);

$months_interval = $interval->y*12 + $interval->m;

// 7 Вычислить кол-во дней которые прошли с момента вашего рождения, можете учитывать високосные дни
$days_interval = $interval->days;

// 8 *Удалить переменные которые были созданы, с помощью функции которую сами найдете.
unset($city, $street, $house, $age, $birthday, $now, $interval, $months_interval, $days_interval);





