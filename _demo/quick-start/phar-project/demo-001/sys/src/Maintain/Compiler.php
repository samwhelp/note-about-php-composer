<?php

namespace Maintain;


class Compiler {


	public function run () {

		var_dump(__FILE__);


		$project_root_dir_path = $this->_ProjectRootDirPath;

		var_dump($project_root_dir_path);

	}

	protected string $_ProjectRootDirPath = '';

	public function setProjectRootDirPath (string $path) {

		$this->_ProjectRootDirPath = $path;

		return $this;
	}


}
