<?php
require '../vendor/autoload.php';
use app\Functions as Fu;

$todo = [];
echo 'Набор - типа обед.';
echo '<form class="form">';
    echo Fu::eform('input', 'name');
    echo Fu::eform('input', 'type');
    echo Fu::eform('input', 'note');
    echo ' ';
//динамический список с выбором удалением добавлением.
    array_push($todo, ['Блюдо', 'вес']);
    array_push($todo, ['Полуфабрикат', 'вес']);
    array_push($todo, ['Продукт', 'вес']);
// Конец динамического списка
    echo Fu::eform('input', 'weight', 'title="вычисляемый"');  // вычисляемый
    echo Fu::eform('input', 'price', 'title="вычисляемый"');  // вычисляемый
echo '</form>';
echo 'Динамический список с выбором удалением добавлением.<br>';
echo Fu::todoList($todo);echo '<br>';
