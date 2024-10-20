<?php
echo "Уровень 1: Легкий";
//Задачи<br>
echo "<br>1. Конкатенация строк:<br>";
//<br>";Объявите две строки, объедините их в одну.
//Подсказка: используйте оператор . для объединения переменных.
$string1 = "Hello";
$string2 = "World!";
$concatenatedString = $string1. $string2;
echo $concatenatedString; // Output: HelloWorld!
echo "<br>2. Изменение регистра:<br>";
//Преобразуйте строку в нижний и верхний регистры.
//Подсказка: используйте strtoupper() и strtolower() .
$string = "Hello World!";
echo strtolower($string);
echo strtoupper($string);
echo "<br>3. Сравнение строк:<br>";
//Сравните две строки, учитывая и не учитывая регистр.
//Подсказка: попробуйте операторы == , === и функцию strcasecmp() .
$str1 = "55";
$str2 = 55;
if($str1 === $str2){
    echo "равны ===";
}else if($str1 == $str2) {
	echo "равны ==";
}else {
    echo "не равны";
}
if(strcasecmp($string1, $string2) == 0) {
    echo "<br/>равны без учёта регистра";
}else {
    echo "<br/>не равны без учёта регистра";
    }

echo "<br>4. Поиск подстроки:<br>";
//Найдите позицию подстроки в строке.
//Подсказка: используйте функцию strpos() .
$string = "Hello World!";
$substring = "World";
$position = strpos($string, $substring);
echo $position; // Output: 6
echo "<br>5. Замена подстроки:<br>";
//Замените одно слово в строке на другое.
//Замените одно слово в строке на другое.
//Подсказка: используйте str_replace() .
$string = "Hello World!";
$substring1 = "World";
$substring2 = "Hello";
$newString = str_replace($substring1, $substring2, $string);
echo $newString; // Output: Hello Hello!
echo "<br>6. Форматирование строки:<br>";
//Отформатируйте строку с использованием переменных.
//Подсказка: используйте функцию sprintf() с нужными спецификаторами.
$name = "John";
$age = 30;
$string = "My name is %s, I'm %d years old.";
$formattedString = sprintf($string, $name, $age);
echo $formattedString; // Output: My name is John, I'm 30 years old.
echo "<br>7. Разделение строки:<br>";
//Разделите строку по разделителю и объедините её обратно.
//Подсказка: используйте explode() и implode() .
$string = "Hello\nWorld!";
$array = explode("\n", $string);
$reversedString = implode(" ", $array);
echo $reversedString; // Output: Hello World!
echo "<br>8. Работа с многострочным текстом:<br>";
//Преобразуйте многострочный текст в HTML-разметку с <br> .
//Подсказка: используйте nl2br() .
$multiLineText = "Hello\nWorld!";
$htmlText = nl2br($multiLineText);
echo $htmlText; // Output: Hello<br>World!
echo "<br>Уровень 2: Усложненный<br>";
echo "<br>1. Сложная конкатенация строк:<br>";
//Объедините несколько строк и добавьте в них переменные в одном
//выражении.
//Подсказка: используйте оператор . для объединения строк с динамическими
//данными.
$string1 = "Hello";
$string2 = "World!";
$name = "John";
$age = 30;
$concatenatedString = "{$string1}{$string2} My name is {$name}, I'm {$age} years old.";
echo $concatenatedString; // Output: HelloWorld! My name is John, I'm 30 years old.
echo "<br>2. Изменение регистра с условиями:<br>";
//Преобразуйте строку так, чтобы каждое слово начиналось с заглавной
//буквы.
//Подсказка: используйте функции ucwords() и strtolower() .
$string = "hello world!";
$words = explode(" ", $string);
$capitalizedWords = array_map(function($word) {
    return ucfirst(strtolower($word));
}, $words);
$capitalizedString = implode(" ", $capitalizedWords);
echo $capitalizedString; // Output: Hello World!
echo "<br>3. Сравнение строк с учётом регистраи без: <br>";
//Проверьте строки на полное совпадение и сравните их без учёта регистра.
//Подсказка: используйте операторы == , === и функцию strcasecmp() .
$str1 = "Hello";
$str2 = "hello";
if(strcasecmp($str1, $str2) === 0) {
    echo "равны ===";
} else {
    echo "не равны";
}
echo "<br>4. Замена подстроки с использованием массива:<br>";
//Замените несколько слов в строке одновременно, используя массивы для
//поиска и замены.
//Подсказка: примените str_replace() , передавая массивы.
$str="    Honda is a truck.
Toyota is a vehicle.
Nissan is a sedan.
Scion is a coupe.";


$pattern=array();
$pattern[0]="truck";
$pattern[1]="vehicle";
$pattern[2]="sedan";
$pattern[3]="coupe";



$replacement=array();
$replacement[0]="car";
$replacement[1]="car";
$replacement[2]="car";
$replacement[3]="car";



echo str_replace($pattern,$replacement,$str);
echo "<br>5. Форматирование строки с числом:<br>";
//Отформатируйте строку, включив в неё числовые значения и строки.
//Подсказка: используйте функцию sprintf() с комбинацией %s и %d .
$number = 123;
$string = "Hello, World!";
$formattedString = sprintf("%d %s", $number, $string);
echo $formattedString; // Output: 123 Hello, World!
echo "<br>6. Разделение и объединение сложной строки:<br>";
//Разделите строку с числовыми значениями по разделителю, суммируйте
//элементы и выведите результат.
//Подсказка: используйте explode() и array_sum() .
$string = "123 456 789";
$numbers = explode(" ", $string);
$sum = array_sum($numbers);
echo $sum;
echo "<br>7. Создание случайной строки:<br>";
//Напишите функцию, которая генерирует случайную строку из букв и цифр.
//Подсказка: используйте массив символов и функцию rand() .
function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString.= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}
echo generateRandomString(10);
echo "<br>8. Проверка строки на палиндром:<br>";
//Напишите функцию, которая проверяет, является ли строка палиндромом.
//Подсказка: используйте strrev() для переворота строки.
function isPalindrome($string) {
    return $string === strrev($string);
}
echo isPalindrome("racecar"); // Output: true
echo isPalindrome("hello"); // Output: false
?>