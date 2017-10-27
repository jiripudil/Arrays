<?php

declare(strict_types = 1);

namespace Arrays\Tests;

use function Arrays\replace;
use Tester\Assert;


require_once __DIR__ . '/bootstrap.php';

(function () {
	$array = [41, 42, 43, 44, 45];

	$arrayWithReplacedValue = replace($array, 43, '43');
	Assert::same([41, 42, 43, 44, 45], $array);
	Assert::same([41, 42, '43', 44, 45], $arrayWithReplacedValue);
})();

(function () {
	$array = [41, 42, 43, 44, 45];

	$arrayWithReplacedValue = replace($array, 46, '46');
	Assert::same([41, 42, 43, 44, 45], $array);
	Assert::same([41, 42, 43, 44, 45], $arrayWithReplacedValue);
})();
