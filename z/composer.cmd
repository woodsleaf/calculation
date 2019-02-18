@set PHP_BIN=php.exe
@set PHP_DIR=D:\Web\utils\php\PHP-7.214x64\
@"%PHP_BIN%" -d output_buffering=0 "%PHP_DIR%composer.phar" %* 
