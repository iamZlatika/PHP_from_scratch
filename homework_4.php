 <?php
    $myArray = [1, 44, 65, 345, 1, 44, 98];
    //  Найти функции и привести по 2 собственных примера работы с ними:
    // 	1.1. Функция, которая вернет все ключи массива
    print_r(array_keys($myArray));
    echo '</br>';
    echo '</br>';

    // 	1.2. Функция, которая оставляет только уникальные занчения в массиве
    print_r(array_unique($myArray));
    echo '</br>';
    echo '</br>';

    // 1.3. Подсчитывает кол-во элементов в массиве
    print_r(sizeof($myArray));
    echo '</br>';
    echo '</br>';

    // Создать переменную $dayNumber = date(‘N’);. Реализовать switch case, который выведет на экран буквенное представление дня недели (Понедельник, вторник...).
    $dayNumber = date('N');
    echo $dayNumber;
    echo '</br>';
    echo '</br>';
    switch ($dayNumber) {
        case 1:
            echo "Понеділок";
            break;
        case 2:
            echo "Вівторок";
            break;
        case 3:
            echo "Середа";
            break;
        case 4:
            echo "Четвер";
            break;
        case 5:
            echo "П'ятниця";
            break;
        case 6:
            echo "Субота";
            break;
        case 7:
            echo "Неділя";
            break;
        default:
            echo "Навіть не знаю, що сказати";
    };
