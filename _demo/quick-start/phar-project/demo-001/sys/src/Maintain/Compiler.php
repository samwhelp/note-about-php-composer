<?php

namespace Maintain;




/*

## Link

* https://symfony.com/doc/current/components/filesystem.html


*/

use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Path;



class Compiler {


	public function run () {

		var_dump(__FILE__);

		$project_root_dir_path = $this->_ProjectRootDirPath;

		$filesystem = new Filesystem();

		if (!file_exists("{$project_root_dir_path}/lib/vendor")) {
			chdir($project_root_dir_path);
			system('composer install');
		}

		if (file_exists("{$project_root_dir_path}/tmp")) {
			echo "## Remove [tmp]({$project_root_dir_path}/tmp)";
	 		$filesystem->remove("{$project_root_dir_path}/tmp");
		}




		foreach ([
			"app",
			"boot",
			"lib",
			"sys"
		] as $path) {
			$filesystem->mirror(
				"{$project_root_dir_path}/{$path}",
				"{$project_root_dir_path}/tmp/prj/{$path}"
			);

		}


		return 0;

	}




	protected string $_ProjectRootDirPath = '';

	public function setProjectRootDirPath (string $path) {

		$this->_ProjectRootDirPath = $path;

		return $this;
	}


}
