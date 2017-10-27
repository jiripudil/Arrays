<?php

declare(strict_types = 1);

namespace Arrays\Tests;

use function Arrays\append;
use Tester\Assert;


require_once __DIR__ . '/bootstrap.php';

(function () {
	$array = [41, 42, 43, 44, 45];

	$arrayWithAppendedValue = append($array, 46);
	Assert::same([41, 42, 43, 44, 45], $array);
	Assert::same([41, 42, 43, 44, 45, 46], $arrayWithAppendedValue);
})();
