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

		//ini_set('phar.readonly', 0);

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


		if (file_exists("{$project_root_dir_path}/demo.phar")) {
			$filesystem->remove("{$project_root_dir_path}/demo.phar");
		}


$stub = sprintf(<<<EOF
#!/usr/bin/env php
<?php
Phar::mapPhar('demo.phar');
define('THE_PRJ_ROOT', 'phar://demo.phar');
define('THE_BUILD_TIMESTAMP', '%s');
define('THE_BIN_DIR_PATH', realpath(__FILE__));
require_once(THE_PRJ_ROOT . '/boot/start/main.php');
__HALT_COMPILER();
?>
EOF, time());

		//echo $stub;

		echo "{$project_root_dir_path}/demo.phar";

		$phar = new \Phar("{$project_root_dir_path}/demo.phar");
		$phar->setAlias('demo.phar');
		$phar->setStub($stub);
		$phar->buildFromDirectory("{$project_root_dir_path}/tmp/prj");
		$phar->compressFiles(\Phar::GZ);
		$phar->stopBuffering();


		// Setting Phar is Executable
		chmod("{$project_root_dir_path}/demo.phar", 0755);

		return 0;

	}




	protected string $_ProjectRootDirPath = '';

	public function setProjectRootDirPath (string $path) {

		$this->_ProjectRootDirPath = $path;

		return $this;
	}


}
