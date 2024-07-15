#!/usr/bin/env bash


##
## https://getcomposer.org/download/
##

rm -rf ./tmp/*

mkdir -p ./tmp

wget -c 'https://getcomposer.org/download/latest-stable/composer.phar' -O ./tmp/composer.phar

mkdir -p ~/.local/bin

cp ./tmp/composer.phar ~/.local/bin/composer

chmod 755 ~/.local/bin/composer
