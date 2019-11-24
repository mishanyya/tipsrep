<?php
//надо найти и показать все автомобили audi A4 2000 года до 200000 механика бензин

//получаем содержимое страницы сайта avito
$homepage = file_get_contents('https://www.avito.ru/rossiya/avtomobili/s_probegom/audi/a4/sedan/mehanika/benzin/peredniy_privod/levyy_rul/ne_bityy?pmax=200000&pmin=0&f=188_893b893.1374_0b15786');
/*
//поиск значения$pattern='audi';

//показывает есть или нет этот шаблон в тексте
//i	- не различать строчные и заглавные буквы.
if (preg_match("/".$pattern."/i", $homepage)) {
    echo "Совпадения найдены!";
} else {
    echo "Ничего не найдено!";
}*/


/*
//поиск и вывод количества совпадений и вывод каждого совпадения
$results=preg_match_all("/div class=\"item item_table clearfix js-catalog-item-enum item-with-contact js-item-extended\"/", $homepage,  $out);
echo "Matches: $results<br>";                        // Выводим количество найденных совпадений
print_r($out);
//здесь preg_match_all("/шаблон/", где искать,  куда поместить результат поиска);
*/

//поиск и вывод количества совпадений и вывод каждого совпадения
//здесь я убрал фразу clearfix js-catalog-item-enum и подставил вместо него (.*),т.е указал любой символ . и, что он может
//быть 0 или больше раз, и первый архив вывел фразу как она должна быть полностью div class="item item_table clearfix js-catalog-item-enum item-with-contact js-item-extended"
//а другой архив вывел убранную фразу clearfix js-catalog-item-enum
$results=preg_match_all("/div class=\"item item_table (.*) item-with-contact js-item-extended\"/", $homepage,  $out);
//когда поставил [] вместо () перестало находить
echo "Matches: $results<br>";                        // Выводим количество найденных совпадений
print_r($out);

//Извлечение данных из массива в переменные:
//в preg_match_all используется многомерный массив
$qwerty=$out[0][0];
echo "<p> Первая подошедшая фраза:".$qwerty."</p>";
$qwerty1=$out[1][0];
echo "<p> Потерянная фраза:".$qwerty1."</p>";

                     // Поиск только первого совпадения
$result = preg_match("/div class=\"item item_table (.*) item-with-contact js-item-extended\"/", $homepage,  $out);        // Производим поиск
echo "Matches: $result<br>";                        // Выводим количество найденных совпадений
print_r($out);                                    // Выводим результат поиска

//вывел в позиции 0 фразу целиком, в позиции 1 вывел потерянный элемент
//Array ( [0] => div class="item item_table clearfix js-catalog-item-enum item-with-contact js-item-extended"
//[1] => clearfix js-catalog-item-enum )
//preg_match() прекращает свою работу после первого найденного совпадения!

//Извлечение данных из массива в переменную:
$qwerty=$out[0];
echo "<p> Первая подошедшая фраза:".$qwerty."</p>";
$qwerty1=$out[1];
echo "<p> Потерянная фраза:".$qwerty1."</p>";
?>
