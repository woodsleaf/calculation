# Два сырых близких по смыслу проекта.

Подготовка в корне проекта `composer install`. Для активации autoload и устранения ошибки `Use of undefined constant console - assumed 'console'`

## Calculation

Рассчет стоимости кулинарного изделия, из открытого файла `public_html/data/chizcher.json` с рецептом.

Стоимость продуктов пока не подтягивается из файла `public_html/data/products.json`

## Add Product and Storage

Sqlite 3 + AjaxSearch в `products` по полю `name` с привязанным скриптом обновления полей и удаления строк из таблицы + 2 рабочих скрипта по добавлению в таблицы `products` и `storage`. В коде полный Хаос. Обновление полей, почему то работает только локально. на хостинге ошибка 500.

База `public_html/calc.sqlite`.

Весь Ajax `public_html/searchfront.js`.

Скрипт созжания базы с нужными полями `public_html/preparebase/dbcreate.php`.

### Общий файл с функциями

`public_html/src/Function.php`

Класс `Functions` использует namespace `app`, и автоматически подгружается как `Fu`.

`require '../vendor/autoload.php';`

`use app\Functions as Fu;`

### Использование Composer

Он тут просто для автозагрузки классов стандартом `psr-4`, и связки namespace `app` с каталогом `public_html`. Подробности в `composer.json`.