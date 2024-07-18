#!/usr/bin/env bash


mkdir -p demo


cd demo


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


#composer require symfony/filesystem
#composer require symfony/console


cat > .gitignore << EOF
composer.lock
vendor/*
EOF


cd "${OLDPWD}"
