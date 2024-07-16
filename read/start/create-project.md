---
title: 產生新專案
nav_order: 1030
has_children: false
parent: 入門
---


## 產生新專案




## 主題

* [相關文件](#相關文件)
* [範例](#範例)
* [操作步驟](#操作步驟)
* [相關議題](#相關議題)




## 相關文件

| 相關文件 |
| --- |
| [Basic usage](https://getcomposer.org/doc/01-basic-usage.md) |
| [composer init](https://getcomposer.org/doc/03-cli.md#init) |
| [The composer.json schema](https://getcomposer.org/doc/04-schema.md) |




## 範例

| 範例 |
| --- |
| [composer-init](https://github.com/samwhelp/note-about-php-composer/tree/gh-pages/_demo/quick-start/composer-init) |




## 操作步驟

* [產生「專案資料夾」](#產生專案資料夾)
* [產生「composer.json」](#產生composerjson)
* [執行「composer install」](#執行composer-install)
* [加入所需「Package」](#加入所需package)
* [修改「autoload」](#修改autoload)



### 產生「專案資料夾」

執行下面指令，產生「demo」這個專案資料夾

``` sh
mkdir -p demo
```

執行下面指令，切換到「demo」這個資料夾

``` sh
cd demo
```




### 產生「composer.json」

接下來我們要產生「composer.json」這個設定檔案。

我們可以透過「純文字編輯器」，直接編輯「[composer.json](https://github.com/samwhelp/note-about-php-composer/blob/gh-pages/_demo/quick-start/composer-init/demo-003/demo/composer.json#L1)」，可以參考「[The composer.json schema](https://getcomposer.org/doc/04-schema.md)」了解各個欄位的功用。


我們也可以透過「[composer init](https://samwhelp.github.io/note-about-php-composer/read/command/composer/init.html)」這個指令，來產生產生「composer.json」這個設定檔案。

> 關於「`composer init`」有兩種模式，

| 模式 |
| ------------------------------------------------------ |
| 「[互動模式](#互動模式)」 | 執行「`composer init`」                  |
| 「[腳本模式](#腳本模式)」 | 執行「`composer init --no-interaction`」 |




#### 互動模式

執行「`composer init`」進入「`互動模式`」，

只要跟著「提示問題」回答，最後就會」產生「composer.json」這個設定檔案。




#### 腳本模式

執行「`composer init`」有加入「`--no-interaction`」這個參數，就會進入「`腳本模式`」，

同時我們也會加入一些參數，舉例如下

其他的參數，就是雷同「`互動模式`」的「提示問題」，加上「您的回答」。

``` sh
composer init \
	--name="cute/demo" \
	--description="The demo project for composer init" \
	--type="project" \
	--license="MIT" \
	--homepage="https://github.com/samwhelp/note-about-php-composer" \
	--author="developer <developer@home.heaven>" \
	--require="symfony/filesystem:^7.1" \
	--require="symfony/console:^7.1" \
	--autoload="" \
	--no-interaction
```

> 上面的步驟，可以參考「[範例腳本](https://github.com/samwhelp/note-about-php-composer/blob/gh-pages/_demo/quick-start/composer-init/demo-002/create.sh)」，並且對照觀看產生的「[composer.json](https://github.com/samwhelp/note-about-php-composer/blob/gh-pages/_demo/quick-start/composer-init/demo-002/demo/composer.json)」




### 執行「composer install」

產生了「`composer.json`」之後，接著就可以執行下面指令

``` sh
composer install
```

沒有例外的狀況下，就會產生「`composer.lock`」這個檔案，和一個資料夾「`vendor`」。

```
demo/
├── composer.json
├── composer.lock
└── vendor
```

而「`vendor`」裡面的檔案，類似如下，除了「`autoload.php`」是檔案，其他的是資料夾。

```
autoload.php
composer
psr
symfony
```

> 除了執行「`composer install`」，爾後也可以執行「`composer update`」。


### 加入「.gitignore」

產生一個檔案「`.gitignore`」，內容如下

```
composer.lock
vendor/*
```

這個動作不是必要的，未來我們若要將這專案放到「GitHub」上，

一般**不會**將「`composer.lock`」以及「`vendor`」「推送(push)」到「GitHub」上，

所以我們要產生「`.gitignore`」這個檔案，裡面列的檔案規則，就不會納入「git」的管理。




### 加入所需「Package」

剛剛前面在執行「`composer init --no-interaction`」時，

我們有加入「`--require="symfony/filesystem:^7.1"`」和「`--require="symfony/console:^7.1"`」這兩個參數，

我們其實也可以在產生了「`composer.json`」之後，執行下面的指令加入。

執行下面指令，加入「[symfony/filesystem](https://symfony.com/doc/current/components/filesystem.html)」

``` sh
composer require symfony/filesystem
```

執行下面指令，加入「[symfony/console](https://symfony.com/doc/current/components/console.html)」

``` sh
composer require symfony/console
```

> 注意，在還沒產生「`composer.json`」之前，也可以直接執行「`composer require`」，也會產生「`composer.json`」，內容類似如下。


``` json
{
    "require": {
        "symfony/filesystem": "^7.1",
        "symfony/console": "^7.1"
    }
}
```




### 修改「autoload」

在上面執行「`composer init --no-interaction`」時，

有加入一個參數「`--autoload=""`」

會產生對應的「`composer.json`」[設定片段](https://github.com/samwhelp/note-about-php-composer/blob/gh-pages/_demo/quick-start/composer-init/demo-002/demo/composer.json#L11-L15)如下

``` json
    "autoload": {
        "psr-4": {
            "Cute\\Demo\\": ""
        }
    },
```

我們直接用「純文字編輯器」，編輯「`composer.json`」這個檔案，[修改如下](https://github.com/samwhelp/note-about-php-composer/blob/gh-pages/_demo/quick-start/composer-init/demo-003/demo/composer.json#L13-L17)

``` json
    "autoload": {
        "psr-4": {
            "Cute\\": "src/Cute"
        }
    },
```

接著執行下面指令，使其生效

``` sh
composer dump-autoload
```

接著我們要來測試，我有將[完整的範例](https://github.com/samwhelp/note-about-php-composer/tree/gh-pages/_demo/quick-start/composer-init/demo-003/demo)放在「GitHub」上

執行下面指令，產生「[src/Cute](https://github.com/samwhelp/note-about-php-composer/tree/gh-pages/_demo/quick-start/composer-init/demo-003/demo/src/Cute)」這個資料夾。

``` sh
mkdir -p src/Cute
```

接著產生一個檔案「[src/Cute/Demo.php](https://github.com/samwhelp/note-about-php-composer/blob/gh-pages/_demo/quick-start/composer-init/demo-003/demo/src/Cute/Demo.php)」，內容如下。


``` php
<?php

namespace Cute;

class Demo {

	public function run () {

		var_dump(__CLASS__);

	}

}

```


接著產生一個檔案「[app.php](https://github.com/samwhelp/note-about-php-composer/blob/gh-pages/_demo/quick-start/composer-init/demo-003/demo/app.php)」，內容如下。


``` php
#!/usr/bin/env php
<?php

	require_once (__DIR__ . '/vendor/autoload.php');

	(new \Cute\Demo())
		->run();

```

這時候，我們就可以執行下面指令，來測試

``` sh
php app.php
```

也可以執行下面指令，將「`app.php`」設定為「`可執行`」，

``` sh
chmod 755 app.php
```

接著就可以執行下面指令，來測試，等同執行「`php app.php`」

``` sh
./app.php
```
