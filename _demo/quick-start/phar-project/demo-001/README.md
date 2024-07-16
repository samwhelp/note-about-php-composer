

# Skel Project




## init

``` sh
composer install
```




## update

``` sh
composer update
```




## dump-autoload

``` sh
composer dump-autoload
```




## run app

run

``` sh
php app.php
```

or run

``` sh
./app.php
```



## Link

* [PHP Composer](https://getcomposer.org/)




## Phar Create Case

* [Pointless/scripts/build.php](https://github.com/scarwu/Pointless/blob/master/scripts/build.php)
* [composer/src/Composer/Compiler.php](https://github.com/composer/composer/blob/main/src/Composer/Compiler.php)


## Notice

edit `/etc/php.ini`

``` ini
[Phar]
; https://php.net/phar.readonly
;phar.readonly = On
phar.readonly = Off
```
