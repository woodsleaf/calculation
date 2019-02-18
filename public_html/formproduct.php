<?php
require '../vendor/autoload.php';
use app\Functions as Fu;

echo 'Продукт';
echo '<form class="form" method="post">';

echo '<fieldset>';
/*
echo eform(
    'input', 'type', 'required type="text" pattern="[-а-яА-Я\w\s\.,]{1,64}"'
);
*/
echo Fu::eform(
    'input', 'name', 'required type="text" pattern="[-а-яА-Я\w\s\.,]{1,64}"'
);
echo Fu::eform(
    'input', 'price', 'required type="text" pattern="\d{0,12},{0,1}\d{0,2}"'
);
echo Fu::eform(
    'input', 'weightpack', 'required type="text" pattern="\d{0,12},{0,1}\d{0,3}"'
);
echo Fu::eform(
    'input', 'in', 'required type="text" pattern="[-а-яА-Я\w\s\.,]{1,5}"'
);
echo Fu::eform('input', 'note', 'pattern="[-а-яА-Я\w\s\.,]{1,64}"');
echo Fu::eform('input', 'timebuy', 'pattern="[-а-яА-Я\w\s\.,]{1,64}"');
echo Fu::eform('input', 'Shelflife', 'pattern="[-а-яА-Я\w\s\.,]{1,64}"');
echo Fu::eform('input', 'storage_temperature', 'pattern="[-а-яА-Я\w\s\.,]{1,64}"');
echo '</fieldset>';
echo '<fieldset>';
echo Fu::eform('input', 'id_product', 'pattern="[-а-яА-Я\w\s\.,]{1,64}"');
echo Fu::eform('input', 'count', 'pattern="[-а-яА-Я\w\s\.,]{1,64}"');
echo Fu::eform('note', 'note', 'pattern="[-а-яА-Я\w\s\.,]{1,64}"');
echo Fu::eform('input', 'timemake', 'pattern="[-а-яА-Я\w\s\.,]{1,64}"');
echo Fu::eform('input', 'timetrash', 'pattern="[-а-яА-Я\w\s\.,]{1,64}"');
echo '</fieldset>';
echo Fu::eform('input', 'addproduct', 'type="submit" value="AddProduct"');
echo Fu::eform('input', 'addprodstor', 'type="submit" value="AddProdStor"');

echo '</form>';
if (isset($_POST['addproduct'])) {
    echo 'Добавлен продукт: ',
    //$_POST['type'], ' ',
    $_POST['name'], ' ', $_POST['note'], ' ', $_POST['weightpack'], ' ',
    $_POST['in'], ' ', $_POST['price'], ' ', $_POST['timebuy'], ' ',
    $_POST['Shelflife'], ' ', $_POST['storage_temperature'];

    include 'dbprodadd.php';
}
if (isset($_POST['addprodstor'])) {
    echo 'Добавлен продукт и на склад: ',
    //$_POST['type'], ' ',
    $_POST['name'], ' ', $_POST['note'], ' ', $_POST['weightpack'], ' ',
    $_POST['in'], ' ', $_POST['price'], ' ', $_POST['timebuy'], ' ',
    $_POST['Shelflife'], ' ', $_POST['storage_temperature'];

    include 'dbprodadd.php';
    include 'dbprodstoradd.php';
}
