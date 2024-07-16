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
| [composer init](https://getcomposer.org/doc/03-cli.md#init) |
| [The composer.json schema](https://getcomposer.org/doc/04-schema.md) |




## 範例

| 範例 |
| --- |
| [composer-init](https://github.com/samwhelp/note-about-php-composer/tree/gh-pages/_demo/quick-start/composer-init) |




## 操作步驟

* [產生「專案資料夾」](#產生專案資料夾)
* [產生「composer.json」](#產生composerjson)



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
| 「`互動模式`」 | 執行「`composer init`」                  |
| 「`腳本模式`」 | 執行「`composer init --no-interaction`」 |
