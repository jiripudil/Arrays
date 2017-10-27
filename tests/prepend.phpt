<?php

declare(strict_types = 1);

namespace Arrays\Tests;

use function Arrays\prepend;
use Tester\Assert;


require_once __DIR__ . '/bootstrap.php';

(function () {
	$array = [41, 42, 43, 44, 45];

	$arrayWithPrependedValue = prepend($array, 40);
	Assert::same([41, 42, 43, 44, 45], $array);
	Assert::same([40, 41, 42, 43, 44, 45], $arrayWithPrependedValue);
})();
