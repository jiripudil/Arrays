<?php

declare(strict_types = 1);

namespace Arrays\Tests;

use function Arrays\concat;
use Tester\Assert;


require_once __DIR__ . '/bootstrap.php';

(function () {
	$array = [41, 42, 43];
	$second = [44, 45];
	$third = [46];
	$concatenated = concat($array, $second, $third);

	Assert::same([41, 42, 43, 44, 45, 46], $concatenated);
})();
