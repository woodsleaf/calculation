<?php

//if ($db = new MyDB("calc.sqlite")) {
if ($db = new SQLite3("calc.sqlite", SQLITE3_OPEN_READWRITE)) {
    //echo $db->Version['versionString'];
    if (isset($_POST['addprodstor'])) {
        //Добавление на склад
        $statement = $db->prepare(
            'INSERT INTO "storage" (
                "id_product", "count", "note", "timemake", "timetrash"
            )
            VALUES (
                :id_product, :count, :note, :timemake, :timetrash)'
        );
        $statement->bindValue(':id_product', $_POST['id_product']);
        $statement->bindValue(':count', $_POST['count']);
        $statement->bindValue(':weightpack', $_POST['weightpack']);
        $statement->bindValue(':note', $_POST['note']);
        $statement->bindValue(':timemake', $_POST['timemake']);
        $statement->bindValue(':timetrash', $_POST['timetrash']);
        $statement->execute();

        //добавление продукта
        $statement = $db->prepare(
            'INSERT INTO "products" (
                "name", "price", "weightpack", "in", "note",
                "timebuy", "Shelflife", "storage_temperature"
            )
            VALUES (
                :name, :price, :weightpack, :in, :note,
                :timebuy, :Shelflife, :storage_temperature)'
        );
        $statement->bindValue(':name', $_POST['name']);
        $statement->bindValue(':price', $_POST['price']);
        $statement->bindValue(':weightpack', $_POST['weightpack']);
        $statement->bindValue(':in', $_POST['in']);
        $statement->bindValue(':note', $_POST['note']);
        $statement->bindValue(':timebuy', $_POST['timebuy']);
        $statement->bindValue(':Shelflife', $_POST['Shelflife']);
        $statement->bindValue(':storage_temperature', $_POST['storage_temperature']);
        $statement->execute();
    }
} else {
    die("Невозможно обратиться к базе данных! ". $sqliteerror);
}

/*
function dbprodstoradd(
    $name, $price, $weightpack,
    $in, $note='', $timebuy='',
    $Shelflife='', $storage_temperature=''
) {

}

if (isset($_POST['addprodstor'])) {
    dbprodstoradd();
}
*/