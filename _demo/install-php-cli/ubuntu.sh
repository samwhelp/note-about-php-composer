#!/usr/bin/env bash

set -e


################################################################################
### Head: ubuntu
##

ubuntu_package_install () {

	echo
	echo "##"
	echo "## PHP Package: ubuntu"
	echo "##"
	echo

	sudo apt-get install php-cli


	echo

}



##
### Tail: ubuntu
################################################################################


################################################################################
### Head: package_install
##

main_package_install () {

	ubuntu_package_install

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
