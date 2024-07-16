---
title: 安裝 composer
nav_order: 1020
has_children: false
parent: 入門
---


# 安裝 composer


## 主題

* [安裝腳本](#安裝腳本)
* [相關文件](#相關文件)
* [操作步驟](#操作步驟)
* [相關議題](#相關議題)




## 安裝腳本

| 安裝腳本 |
| --- |
| [install-composer](https://github.com/samwhelp/note-about-php-composer/blob/gh-pages/_demo/install-composer/install.sh)|




## 相關文件

| 相關文件 |
| --- |
| [Download Composer](https://getcomposer.org/download/) |




## 操作步驟


執行下面指令，下載最新版本的「`composer.phar`」。

``` sh
wget -c 'https://getcomposer.org/download/latest-stable/composer.phar'
```

執行下面指令，產生「`~/.local/bin`」這個資料夾

``` sh
mkdir -p ~/.local/bin
```

執行下面指令，將「`composer.phar`」放到「`~/.local/bin`」這個資料夾，並且更名為「`composer`」。

``` sh
mv composer.phar ~/.local/bin/composer
```

執行下面指令，將「`composer`」設定為可執行

``` sh
chmod 755 ~/.local/bin/composer
```

> 只要確保「`~/.local/bin/`」有設定在「`PATH`」這個環境變數之中。就可以在任意路徑執行「`composer`」這個指令。

執行下面指令

``` sh
composer --version
```

顯示

```
Composer version 2.7.7 2024-06-10 22:11:12
PHP version 8.3.9 (/usr/bin/php)
Run the "diagnose" command to get more detailed diagnostics output.
```




## 相關議題

| 相關議題 |
| --- |
| [Config global vendor binaries directory to to path environment variable](https://samwhelp.github.io/note-about-php-composer/read/howto/config-composer-global-vendor-binaries-directory-to-path-environment-variable.html) |
