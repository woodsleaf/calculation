<?php
require '../vendor/autoload.php';
use app\Functions as Fu;

/**
 * Undocumented function
 *
 * @param string $search string
 * 
 * @return void
 */
function searchback($search='')
{
    if (isset($_POST['search'])) {
        header("Content-type: text/html; charset=UTF-8");
        //$search = $_POST['search'];
        $search = addslashes($search);
        $search = htmlspecialchars($search); //, ENT_COMPAT, "UTF-8"
        $search = stripslashes($search);
        //$search = strtolower($search);
        //var_dump($_POST);
        if ($search == '') {
            exit("Начните вводить запрос, '*' покажет все продукты.");
        }
        //Поиск по базе данных *************************************
        //table - таблица в которой ищем
        //text - поле по котрому ищем (для работы должен стоять атрибут "полный текст")
        //
        //$db, $flags=SQLITE3_OPEN_READWRITE
        //open($db, $flags) SQLite3
        //if ($db = new MyDB("calc.sqlite")) {
        //$db = new SQLite3::open("calc.sqlite", SQLITE3_OPEN_READWRITE)
        $tablename = 'products'; //storage
        if ($db = new SQLite3("calc.sqlite", SQLITE3_OPEN_READWRITE)) {
            if (isset($search)) {
                //$search = strtolower($search);
                //echo $search. '<br>';
                //echo count($result);
                if ($search !== '*') {
                    $result = $db->query(
                        "SELECT * FROM '$tablename' WHERE name LIKE '%$search%'"
                    );
                } else {
                    $result = $db->query(
                        "SELECT * FROM '$tablename'"
                    );
                }
                
    
                while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
                    echo '<form name="'. $row['id']. '" action="dbupdel.php" method="post">';//echo '<span>';
                    echo '<input name="u" value="u" type="submit">';
                    echo '<input name="x" value="x" type="submit">'; // tabindex="-1"
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
                if (!$result->num_rows) {
                    //Проверка на отсутствие результата запроса в бд
                    //echo count($result);
                    echo 'Нет результатов', '<br>';
                }
            }
        }
    }
}

if (isset($_POST['search'])) {
    searchback($_POST['search']);
}