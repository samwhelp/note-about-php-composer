<?php

namespace Cute;

/*

## Link

* https://symfony.com/doc/current/components/filesystem.html


*/



use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Path;


class Demo {

	public function run () {
		var_dump(__CLASS__);


		$filesystem = new Filesystem();
		$path=Path::normalize(sys_get_temp_dir().'/symfony/'.random_int(0, 1000));
		var_dump($path);
		try {
			$filesystem->mkdir(
				$path,
			);
		} catch (IOExceptionInterface $exception) {
			echo "An error occurred while creating your directory at ".$exception->getPath();
		}


		$filesystem->mirror(
				"/home/sam/.config/bspwm", "/tmp/symfony/config/bspwm",
			);


	}

}
