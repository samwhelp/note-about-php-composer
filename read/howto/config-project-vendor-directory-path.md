---
title: 修改「vendor」這個資料夾的預設放置路徑
nav_order: 6020
has_children: false
parent: 如何
---


# 修改「vendor」這個資料夾的預設放置路徑




## 主題

* [相關文件](#相關文件)
* [案例](#案例)
* [操作步驟](#操作步驟)




## 相關文件

| 相關文件 |
| --- |
| Config / [vendor-dir](https://getcomposer.org/doc/06-config.md#vendor-dir) |




## 案例

| 案例 |
| --- |
| [skel-project](https://github.com/samwhelp/note-about-php-composer/tree/gh-pages/_demo/quick-start/skel-project/demo-001) |




## 操作步驟

延續「[產生新專案](https://samwhelp.github.io/note-about-php-composer/read/start/create-project.html#%E5%9F%B7%E8%A1%8Ccomposer-install)」這篇提到的，

執行「`composer install`」之後，預設產生一個資料夾「`vendor`」。

我們也可以將「`vendor`」這個資料夾，設定到別的路徑。


* [修改「composer.json」](#修改composerjson)
* [執行「composer update」](#執行composer-update)


### 修改「composer.json」

我們可以透過「純文字編輯器」，修改「composer.json」，加入的「設定片段」如下

``` json
    "config": {
        "vendor-dir": "lib/vendor"
    },
```




## 執行「composer update」

修改「composer.json」完成後，可以執行下面指令

``` sh
composer update
```

就會產生新的「`vendor`」資料夾及其底下的檔案，到新的路徑。
