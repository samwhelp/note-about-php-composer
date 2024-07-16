---
title: composer-help
nav_order: 8010
has_children: false
parent: composer
grand_parent: 指令
---


# composer-help




## 主題

* [相關文件](#相關文件)
* [help](#help)
* [相關議題](#相關議題)




## 相關文件

| 相關文件 |
| --- |
| [composer help](https://getcomposer.org/doc/03-cli.md#help) |




## help

執行

``` sh
composer help help
```

或是執行

``` sh
composer help --help
```

顯示

```
Description:
  Display help for a command

Usage:
  help [options] [--] [<command_name>]

Arguments:
  command_name                   The command name [default: "help"]

Options:
      --format=FORMAT            The output format (txt, xml, json, or md) [default: "txt"]
      --raw                      To output raw command help
  -h, --help                     Display help for the given command. When no command is given display help for the list command
  -q, --quiet                    Do not output any message
  -V, --version                  Display this application version
      --ansi|--no-ansi           Force (or disable --no-ansi) ANSI output
  -n, --no-interaction           Do not ask any interactive question
      --profile                  Display timing and memory usage information
      --no-plugins               Whether to disable plugins.
      --no-scripts               Skips the execution of all scripts defined in composer.json file.
  -d, --working-dir=WORKING-DIR  If specified, use the given directory as working directory.
      --no-cache                 Prevent use of the cache
  -v|vv|vvv, --verbose           Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

Help:
  The help command displays help for a given command:
  
    /home/user/.local/bin/composer help list
  
  You can also output the help in other formats by using the --format option:
  
    /home/user/.local/bin/composer help --format=xml list
  
  To display the list of available commands, please use the list command.
```
