<?php

declare(strict_types = 1);

namespace Arrays\Tests;

use function Arrays\chunk;
use Tester\Assert;


require_once __DIR__ . '/bootstrap.php';

(function () {
	$array = [41, 42, 43, 44, 45];
	$chunks = chunk($array, 2);

	Assert::same([
		[41, 42],
		[43, 44],
		[45],
	], $chunks);
})();
