<?php

$todo = [];
echo 'Набор - типа обед.';
echo '<form class="form">';
    echo eform('input', 'name');
    echo eform('input', 'type');
    echo eform('input', 'note');
    echo ' ';
//динамический список с выбором удалением добавлением.
    array_push($todo, ['Блюдо', 'вес']);
    array_push($todo, ['Полуфабрикат', 'вес']);
    array_push($todo, ['Продукт', 'вес']);
// Конец динамического списка
    echo eform('input', 'weight', 'title="вычисляемый"');  // вычисляемый
    echo eform('input', 'price', 'title="вычисляемый"');  // вычисляемый
echo '</form>';
echo 'Динамический список с выбором удалением добавлением.<br>';
echo todoList($todo);echo '<br>';
