---
title: Config global vendor binaries directory to to path environment variable
nav_order: 6010
has_children: false
parent: 如何
---


# Config global vendor binaries directory to to path environment variable




## 相關文件

| 相關文件 |
| --- |
| CLI (Command Line Interface) / composer / [global](https://getcomposer.org/doc/03-cli.md#global) |




## 案例

| 案例 |
| --- |
| [Leaf CLI](https://leafphp.dev/docs/cli/) |




## 操作步驟

以「[Leaf CLI](https://leafphp.dev/docs/cli/)」為例




### 安裝「leaf」

執行下面指令，安裝「leaf」這個指令。

``` sh
composer global require leafs/cli
```

安裝完成後，可以在「`~/.config/composer/vendor/bin/`」這個路徑，找到「`leaf`」指令

執行

``` sh
ls -1 ~/.config/composer/vendor/bin
```

顯示

```
leaf
php-parse
psysh
var-dump-server
```




### 加入 PATH

為了我們要在任意路徑，可以執行「`leaf`」這個指令，

所以我們要將「`~/.config/composer/vendor/bin/`」這個路徑，加入到「`PATH`」這個環境變數。

舉例，我是使用「`bash`」，所以要將下面這一行加入「`~/.bashrc`」，下次再啟動「`bash`」就會生效。

``` sh
export PATH="${HOME}/.config/composer/vendor/bin/:${PATH}"
```

執行下面指令，觀看「`PATH`」這個環境變數的內容。

``` sh
echo $PATH
```

顯示

```
/home/user/.config/composer/vendor/bin/:/home/user/.config/composer/vendor/bin/:/home/user/.local/bin:/home/user/bin:/usr/local/bin:/usr/bin:/usr/local/sbin:/usr/sbin
```
