<?php
/**
 * All Function included in this file
 * 
 * __construct()
 * test()
 * getParent($namevalue, $parents)
 * okrug($flo, $des='2')
 * eform($type, $name, $attr = '')
 * todoList($todo)
 * htmlCont($title = '')
 * 
 */
namespace app;
//echo 'Functions+';
/*
class MyDB extends SQLite3
{
    public function __construct($db, $flags=SQLITE3_OPEN_READWRITE)
    {
        $this->open($db, $flags);
    }
}*/
/**
 * Function get parent()
 *
 * @param string $namevalue имя
 * @param object $parents   объект
 *
 * @return void
 */

class Functions
{
    public function __construct()
    {
    }
    public function test()
    {
        return 'Fu Test Ok+';
    }
    public function getParent($namevalue, $parents)
    {
        foreach ($parents as $par) {
            if ($namevalue === $par->name) {
                return $par;
            }
        }
    }
    /**
     * Okruglenie function
     *
     * @param [type] $flo число для обработки
     * @param string $des количество знаков после запятой на выходе
     *
     * @return void
     */
    public function okrug($flo, $des='2')
    {
        return number_format($flo, $des, ',', ' ');
    }

    /**
     * Eform function
     *
     * @param string $type Тип поля
     * @param string $name Имя и ID поля
     * @param string $attr class, style, other
     *
     * @return void
     */
    public function eform($type, $name, $attr = '')
    {
        if ($type === 'input') {
            return '<'. $type.
                    ' name="'. $name.
                    '" id="'. $name.
                    '" placeholder="'. $name. '" '.
                        $attr. '>';
        } else if ($type === 'textarea') {
            return '<'. $type. ' name="'. $name. '" id="'. $name.
            '" placeholder="'. $name. '" '. $attr. '></'. $type. '>';
        }
        return '<'. $type. ' name="'. $name. '" id="'. $name. '" '. $attr. '>';
    }
    /**
     * Function todoList($todo)
     *
     * @param array $todo Array[array,array,...]
     *
     * @return void
     */
    public function todoList($todo)
    {
        foreach ($todo as $column) {
            foreach ($column as $value) {
                $sum .= ' '. $value;
            }
            $sum .= ';';
        }
        return $sum;
    }


    /**
     * Page upend function
     *
     * @param string $title trigger up else end
     *
     * @return void
     */
    public function htmlCont($title = '')
    {
        if ($title !== '') {
            return '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>'. $title. '</title>
            </head>
            <body>';
        }
        return '</body>
    </html>';
    }
  
}
