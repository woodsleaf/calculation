@set PHP_BIN=php.exe
@set PHP_DIR=D:\web\tools\php\php-7\
@"%PHP_BIN%" -d output_buffering=0 "%PHP_DIR%phpDocumentor.phar" %*