<?php

//echo htmlCont('Добавление ингридиентов');
echo '
<style>
.w100left{
    width: 100%;
    text-align: left;
}
.form{
    width: 100%;
    /* display: flex; justify-content: flex-end; flex-wrap: wrap; */
}
.form input:nth-child(1n){
    display: inline-block; width: 8em; text-align: right;}
.form input:nth-child(1){
    display: inline-block;width: 18em; text-align: left;}
</style>';
echo '<div class="w100left">'; // w100left

echo 'Варианты объектов';
echo '<br><br>';
require 'formproduct.php';

echo '<br>';
require 'formpolufabricat.php';

echo '<br>';
require 'formready.php';

echo '<br>';
require 'formreadymix.php';

echo '<p>Сверху можно найти объект по ключевым словам, и после его выбора
  отредактировать его компоненты, либо просто добавить новый. Пока что
  предполагается хранить рецепты в отдельных файлах json
 (параллельно можно в базе но таким образом все данные будут уже готовы
  к импорту куда либо), продукты с ценами и упаковками в базе.</p>';
echo '<br>На выходе готовый json объект в зависимости от типа.
 Сохраняемый по кнопке.';
echo eform('input', 'submit', 'type="button" value="Сохранить"');
echo '</div>'; // /w100left
//echo htmlCont();
