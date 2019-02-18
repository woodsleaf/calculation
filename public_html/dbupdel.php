<?php

//print_r($_POST);
//if ($db = new MyDB("calc.sqlite")) {
if ($db = new SQLite3("calc.sqlite", SQLITE3_OPEN_READWRITE)) {
    //echo $db->Version['versionString'];
    if (isset($_POST['u'])) {
        $statement = $db->prepare(
            'UPDATE "products" SET(
                "name", "price", "weightpack",
                "in", "note", "timebuy",
                "Shelflife", "storage_temperature"
                )
            = (
                :name, :price, :weightpack,
                :in, :note, :timebuy,
                :Shelflife, :storage_temperature
                )
            WHERE "id" = :id'
        );//$_POST["id"]
        $statement->bindValue(':id', $_POST['id']);
        $statement->bindValue(':name', $_POST['name']);
        $statement->bindValue(':price', $_POST['price']);
        $statement->bindValue(':weightpack', $_POST['weightpack']);
        $statement->bindValue(':in', $_POST['in']);
        $statement->bindValue(':note', $_POST['note']);
        $statement->bindValue(':timebuy', $_POST['timebuy']);
        $statement->bindValue(':Shelflife', $_POST['Shelflife']);
        $statement->bindValue(
            ':storage_temperature', $_POST['storage_temperature']
        );
        $statement->execute();
        echo 'Обновление полей записи '. $_POST['id'];
    } elseif (isset($_POST['x'])) {
        $statement = $db->prepare(
            'DELETE FROM "products" WHERE "id" = :id'
        );
        $statement->bindValue(':id', $_POST['id']);
        $statement->execute();
        echo 'Удаление записи '. $_POST['id'];
    }
} else {
    die("Невозможно обратиться к базе данных! ". $sqliteerror);
}
