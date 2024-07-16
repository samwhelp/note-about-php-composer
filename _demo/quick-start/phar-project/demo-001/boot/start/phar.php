<?php

	require_once (THE_PRJ_ROOT . '/boot/loader/main.php');

	(new Maintain\Compiler())
			->run();
