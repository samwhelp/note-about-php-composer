#!/usr/bin/env bash

set -e


################################################################################
### Head: fedora
##

fedora_package_install () {

	echo
	echo "##"
	echo "## PHP Package: fedora"
	echo "##"
	echo

	sudo dnf install \
		php-cli \
		php-xml \
		php-mbstring


	echo

}



##
### Tail: fedora
################################################################################


################################################################################
### Head: package_install
##

main_package_install () {

	fedora_package_install

}

##
### Tail: package_install
################################################################################


################################################################################
### Head: Main
##

__main__ () {

	main_package_install

}

##
## Start
##
__main__

##
### Tail: Main
################################################################################
