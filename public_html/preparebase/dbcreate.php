<?php

$db = new SQLite3('calc.sqlite', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);

$db->query(
    'CREATE TABLE IF NOT EXISTS "products" (
        "id" INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
        "name" VARCHAR,
        "price" INTEGER,
        "weightpack" INTEGER,
        "in" VARCHAR,
        "note" VARCHAR,
        "timebuy" DATETIME,
        "Shelflife" DATETIME,
        "storage_temperature" INTEGER
    )'
);

$db->query(
    'CREATE TABLE IF NOT EXISTS "storage" (
        "id" INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
        "id_product" VARCHAR,
        "count" INTEGER,
        "note" VARCHAR,
        "timemake" DATETIME,
        "timetrash" DATETIME
    )'
);

$db->query(
    'CREATE TABLE IF NOT EXISTS "ingridients" (
        "id" INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
        "name" VARCHAR,
        "count" INTEGER,
        "idready" INTEGER,
        "note" VARCHAR
    )'
);

$db->query(
    'CREATE TABLE IF NOT EXISTS "ready" (
        "id" INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
        "name" VARCHAR,
        "price" INTEGER,
        "weight" INTEGER,
        "note" VARCHAR
    )'
);
