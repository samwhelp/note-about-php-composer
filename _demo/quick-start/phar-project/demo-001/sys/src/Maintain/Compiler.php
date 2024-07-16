<?php

namespace Maintain;


class Compiler {


	public function run () {

		var_dump(__FILE__);

		var_dump($this->_ProjectRootPath);

	}

	protected string $_ProjectRootPath = '';

	public function setProjectRootPath (string $path) {

		$this->_ProjectRootPath = $path;

		return $this;
	}


}
