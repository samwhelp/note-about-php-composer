<?php

	require_once(dirname(__DIR__, 2) . '/boot/loader/main.php');

	(new Maintain\Compiler())
		->setProjectRootDirPath(dirname(__DIR__, 2))
		->setTargetPharFileName('demo.phar')
		->run();
