<?php

session_start();
/*if ($_SESSION['authorized']<>1) {
    header("Location: /auth.php");
    exit;
}*/

require_once 'begin.php';
require_once 'css.html';
require_once 'menu.php';
require_once 'function.php';
//Читаем данные из файла
$file = file_get_contents('data/chizcher.json', 'data/');
//$file = file_get_contents('data/chiz.json', 'data/');
//jsonToStdObject
$stdobj = json_decode($file);
// Запись переменной $file в файл  // file_put_contents('data/2.json', $file);
//json_decode($file)
//json_encode($file);

$items = $stdobj->ingridients;  // компоненты
$parents = $stdobj->parentsingridients;  // данные родительских компонентов
$obj = $stdobj->ready;  // данные готового объекта

echo '<h3>', $obj[0]->name, '</h3>';
$iprep = [];
foreach ($items as $ikey) {
    /*
    $ikey->name //Название
    $ikey->parent //Родительский объект
    $ikey->count //float Нужное количество
    $ikey->note //Дополнительная информация для обработки

    //Эти поля есть в родительских объектах или в объектах сиротах
    $ikey->price //Цена за пачку
    $ikey->weightpack //string Количество в пачке
    $ikey->in //мера измерения
    */
    if ($ikey->parent) {
        $parent = getParent($ikey->parent, $parents);
        $k = $ikey->count / $parent->weightpack;
        $kprice = $k * $parent->price;

        if ($parent->in === "pack" && $parent->weightpack && $ikey->note !== "") {
            $iweight = $ikey->note * $ikey->count;
        } else {
            $iweight = $ikey->count;
        }
        array_push($iprep, array($ikey->name,$iweight,$kprice));
        //echo '<br>Ингридиент: ', $ikey->name, ', Вес: ', $iweight,
        //', Стоимость: ', $kprice;
    } else {
        $k = $ikey->count / $ikey->weightpack;
        $kprice = $k * $ikey->price;

        if ($ikey->in === "pack" && $ikey->weightpack && $ikey->note !== "") {
            $iweight = $ikey->note * $ikey->count;
        } else {
            $iweight = $ikey->count;
        }
        array_push($iprep, array($ikey->name,$iweight,$kprice));
        //echo '<br>Ингридиент: ', $ikey->name, ', Вес: ', $iweight,
        //', Стоимость: ', $kprice;
    }
    $tprice += $kprice;
    $tweight += $iweight;
}
echo '
<div class="rc">
<span>Ингридиенты</span><span>Вес,кг.</span><span>Стоимость,руб.</span><span>%</span>
<hr>
</div>';
foreach ($iprep as $i) {
    echo '
<div class="rc">
<span>', $i[0], '</span> <span>', okrug($i[1], 3), '</span> <span>', okrug($i[2]),
    '</span> <span>',
    okrug($i[2]/$tprice*100, 1), '</span>
</div>';
}
echo '<hr>';
echo '<div class="rca">';
echo '<span>Себестоимость,руб.</span>', '<span>Брутто,кг.</span>',
    '<span>Нетто,кг.</span>',
    '<span>Порций,шт.</span>', '<span>Вес порции,кг.</span>';
echo '</div>';

echo '<div class="rca">';
echo '<span>', okrug($tprice), '</span>', '<span>', $tweight, '</span>',
'<span>', $obj[0]->weight, '</span>', '<span>', $obj[0]->porciy, '</span>',
'<span>', $obj[0]->weight/$obj[0]->porciy, '</span>';
echo '</div>';

echo 'Предполагаемая цена продажи: ', okrug($tprice*3), 'руб.';

require_once 'end.php';
?>
