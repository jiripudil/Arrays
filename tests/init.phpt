<?php

declare(strict_types = 1);

namespace Arrays\Tests;

use function Arrays\init;
use Tester\Assert;


require_once __DIR__ . '/bootstrap.php';

(function () {
	$array = [41, 42, 43, 44, 45];
	$init = init($array);
	Assert::same([41, 42, 43, 44], $init);
})();
