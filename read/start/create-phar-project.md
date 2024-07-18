---
title: 產生「Phar」專案
nav_order: 1040
has_children: false
parent: 入門
---


## 產生「Phar」專案




## 主題

* [相關文件](#相關文件)
* [範例](#範例)
* [概略說明](#概略說明)




## 相關文件

| 相關文件 |
| --- |
| PHP / [Phar](https://www.php.net/manual/en/book.phar.php) |
| PHP / [Phar file stub](https://www.php.net/manual/en/phar.fileformat.stub.php) |
| PHP / [Phar::mapPhar](https://www.php.net/manual/en/phar.mapphar.php) |




## 範例

| 範例 |
| --- |
| basic / [phar-project](https://github.com/samwhelp/note-about-php-composer/tree/gh-pages/_demo/quick-start/phar-project) |
| symfony / [phar-project](https://github.com/samwhelp/note-about-php-symfony/tree/gh-pages/_demo/quick-start/phar-project) |




## 概略說明

### 參考專案

> 參考下面兩個專案，實做了產生「phar」的專案。


| 專案 | 實做程式碼 |
| --- | -------- |
| [Pointless](https://github.com/scarwu/Pointless) | [Pointless/scripts/build.php](https://github.com/scarwu/Pointless/blob/master/scripts/build.php)
| [Composer](https://github.com/composer/composer) | [composer/src/Composer/Compiler.php](https://github.com/composer/composer/blob/main/src/Composer/Compiler.php) |


我寫了好幾個範例，可以參考上面的「[範例](#範例)」連結。

編譯成「phar」的實做程式碼，主要放
在專案的「[sys/src/Maintain/Compiler.php](https://github.com/samwhelp/note-about-php-symfony/blob/gh-pages/_demo/quick-start/phar-project/demo-002/sys/src/Maintain/Compiler.php)」


### 關於「phar」進入點

> 關於「phar」進入點，要觀看在「`stub`」那裡的「[程式碼片段](https://github.com/samwhelp/note-about-php-symfony/blob/gh-pages/_demo/quick-start/phar-project/demo-002/sys/src/Maintain/Compiler.php#L99)」如下。

``` php
$stub = sprintf(<<<EOF
#!/usr/bin/env php
<?php
Phar::mapPhar('%s');
define('THE_PRJ_ROOT_DIR_PATH', 'phar://%s');
define('THE_BUILD_TIMESTAMP', '%s');
define('THE_APP_FILE_PATH', realpath(__FILE__));
require_once(THE_PRJ_ROOT_DIR_PATH . '/boot/start/main.php');
__HALT_COMPILER();
?>
EOF, $target_phar_file_name, $target_phar_file_name, time());
```

上面的片段，最後可以在「`demo.phar`」檔案開頭看到。

舉例：可以使用「`less demo.phar`」觀看「phar檔」的內容。

``` php
#!/usr/bin/env php
<?php
Phar::mapPhar('demo.phar');
define('THE_PRJ_ROOT_DIR_PATH', 'phar://demo.phar');
define('THE_BUILD_TIMESTAMP', '1721301058');
define('THE_APP_FILE_PATH', realpath(__FILE__));
require_once(THE_PRJ_ROOT_DIR_PATH . '/boot/start/main.php');
__HALT_COMPILER(); ?>
```

> 關於「phar」進入點，關鍵的部份，在於下面三行。

``` php
Phar::mapPhar('demo.phar');
define('THE_PRJ_ROOT_DIR_PATH', 'phar://demo.phar');
require_once(THE_PRJ_ROOT_DIR_PATH . '/boot/start/main.php');
```

>　上面三行，也可以看作是如下的兩行「程式片段」。

``` php
Phar::mapPhar('demo.phar');
require_once('phar://demo.phar/boot/start/main.php');
```

> 也就是會載入「demo.phar」裡面的「[boot/start/main.php](https://github.com/samwhelp/note-about-php-symfony/blob/gh-pages/_demo/quick-start/phar-project/demo-002/boot/start/main.php)」。

> 關於「stub」的內容，可以閱讀「PHP / [Phar file stub](https://www.php.net/manual/en/phar.fileformat.stub.php)」。



對照沒有打包成「phar」的「[app.php](https://github.com/samwhelp/note-about-php-symfony/blob/gh-pages/_demo/quick-start/phar-project/demo-002/app.php)」。

也是載入專案的「[boot/start/main.php](https://github.com/samwhelp/note-about-php-symfony/blob/gh-pages/_demo/quick-start/phar-project/demo-002/boot/start/main.php)」。
