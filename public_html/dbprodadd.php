<?php

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
