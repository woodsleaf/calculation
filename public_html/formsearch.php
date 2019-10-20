<?php
require '../vendor/autoload.php';
//use app\A;
use app\Functions as Fu;
//echo 'formsearch+';
//echo Fu::test();
//$va = new A();
//echo $va->test();

//$Fu = new Functions();
require 'searchback.php'; //action="searchback.php"
echo '<form class="form" method="post" name="form" onsubmit="return false;">';
    echo '<p>Живой поиск:<br>',
            Fu::eform('input', 'search', 'type="text"').
         '</p>';
echo '</form>';
echo '<div id="resSearch">Начните вводить запрос, * покажет все продукты.</div>';
