---
title: composer init
nav_order: 8020
has_children: false
parent: composer
grand_parent: 指令
---


# composer init




## 主題

* [相關文件](#相關文件)
* [help](#help)
* [相關議題](#相關議題)




## 相關文件

| 相關文件 |
| --- |
| [composer init](https://getcomposer.org/doc/03-cli.md#init) |




## help

執行

``` sh
composer help init
```

或是執行

``` sh
composer init --help
```

顯示

```
Description:
  Creates a basic composer.json file in current directory

Usage:
  init [options]

Options:
      --name=NAME                Name of the package
      --description=DESCRIPTION  Description of package
      --author=AUTHOR            Author name of package
      --type=TYPE                Type of package (e.g. library, project, metapackage, composer-plugin)
      --homepage=HOMEPAGE        Homepage of package
      --require=REQUIRE          Package to require with a version constraint, e.g. foo/bar:1.0.0 or foo/bar=1.0.0 or "foo/bar 1.0.0" (multiple values allowed)
      --require-dev=REQUIRE-DEV  Package to require for development with a version constraint, e.g. foo/bar:1.0.0 or foo/bar=1.0.0 or "foo/bar 1.0.0" (multiple values allowed)
  -s, --stability=STABILITY      Minimum stability (empty or one of: stable, RC, beta, alpha, dev)
  -l, --license=LICENSE          License of package
      --repository=REPOSITORY    Add custom repositories, either by URL or using JSON arrays (multiple values allowed)
  -a, --autoload=AUTOLOAD        Add PSR-4 autoload mapping. Maps your package's namespace to the provided directory. (Expects a relative path, e.g. src/)
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
  The init command creates a basic composer.json file
  in the current directory.
  
  php composer.phar init
  
  Read more at https://getcomposer.org/doc/03-cli.md#init
```



