<?php
//require '../vendor/autoload.php';
//use app\Functions as Fu;

/**
 * Undocumented function
 *
 * @param string $name                name
 * @param [type] $price               price
 * @param [type] $weightpack          wpack
 * @param string $in                  in
 * @param string $note                note
 * @param string $timebuy             timebuy
 * @param string $Shelflife           sheflife
 * @param string $storage_temperature storage_temperature
 * 
 * @return void
 */
function dbprodadd(
    $name, $price, $weightpack,
    $in, $note='', $timebuy='',
    $Shelflife='', $storage_temperature=''
) {
    //if ($db = new MyDB("calc.sqlite")) {
    if ($db = new SQLite3("calc.sqlite", SQLITE3_OPEN_READWRITE)) {
        //echo $db->Version['versionString'];
        if (isset($_POST['addproduct'])) {
            $statement = $db->prepare(
                'INSERT INTO "products" (
                    "name", "price", "weightpack", "in", "note",
                    "timebuy", "Shelflife", "storage_temperature"
                )
                VALUES (
                    :name, :price, :weightpack, :in, :note,
                    :timebuy, :Shelflife, :storage_temperature)'
            );
            $statement->bindValue(':name', $name);
            $statement->bindValue(':price', $price);
            $statement->bindValue(':weightpack', $weightpack);
            $statement->bindValue(':in', $in);
            $statement->bindValue(':note', $note);
            $statement->bindValue(':timebuy', $timebuy);
            $statement->bindValue(':Shelflife', $Shelflife);
            $statement->bindValue(':storage_temperature', $storage_temperature);
            $statement->execute();
        }
    } else {
        die("Невозможно обратиться к базе данных! ". $sqliteerror);
    }
}

if (isset($_POST['addproduct'])) {
    dbprodadd(
        $_POST['name'], $_POST['price'], $_POST['weightpack'],
        $_POST['in'], $_POST['note'], $_POST['timebuy'],
        $_POST['Shelflife'], $_POST['storage_temperature']
    );
}