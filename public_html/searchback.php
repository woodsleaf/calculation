<?php
require '../vendor/autoload.php';
use app\Functions as Fu;
//echo 'searchback+';

if (isset($_POST['search'])) {
    //include 'function.php';
    header("Content-type: text/html; charset=UTF-8");
    $search = $_POST['search'];
    $search = addslashes($search);
    $search = htmlspecialchars($search); //, ENT_COMPAT, "UTF-8"
    $search = stripslashes($search);
    //var_dump($_POST);
    if ($search == '') {
        //echo "<p>Начните вводить запрос</p>";
        exit("Начните вводить запрос");
    }
    //Поиск по базе данных *************************************
    //table - таблица в которой ищем
    //text - поле по котрому ищем (для работы должен стоять атрибут "полный текст")
    //
    //$db, $flags=SQLITE3_OPEN_READWRITE
    //open($db, $flags) SQLite3
    //if ($db = new MyDB("calc.sqlite")) {
    //$db = new SQLite3::open("calc.sqlite", SQLITE3_OPEN_READWRITE)
    if ($db = new SQLite3("calc.sqlite", SQLITE3_OPEN_READWRITE)) {
        if (isset($search)) {
            //echo count($result);
            $result = $db->query(
                "SELECT * FROM products WHERE name LIKE '%$search%'"
            );

            while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
                echo '<form name="'. $row['id']. '" action="dbupdel.php" method="post">';//echo '<span>';
                echo '<input name="x" value="x" type="submit">';
                echo '<input name="u" value="u" type="submit">';
                /*
                echo '<input name="ident" value="'.
                    $row['id']. '" hidden type="submit">';
                */
                foreach ($row as $key=>$value) {
                    //if ($key !== 'id') {
                        echo Fu::eform('input', $key, 'type="text" value="'. $value. '"');// pattern="[-а-яА-Я\w\s\.,]{1,64}"
                    //}
                }
                //echo '</span><br>';
                echo '</form>';
            }

            //echo count($result);
            if (count($result)===0) {
                //echo count($result);
                echo 'Нет результатов', '<br>';
            }
        }
    }
}
