<?php

declare(strict_types = 1);

namespace Arrays\Tests;

use function Arrays\remove;
use Tester\Assert;


require_once __DIR__ . '/bootstrap.php';

(function () {
	$array = [41, 42, 43, 44, 45];

	$arrayWithRemovedValue = remove($array, 43);
	Assert::same([41, 42, 43, 44, 45], $array);
	Assert::same([41, 42, 44, 45], $arrayWithRemovedValue);
})();

(function () {
	$array = [41, 42, 43, 44, 45, 42];

	$arrayWithRemovedValue = remove($array, 42);
	Assert::same([41, 42, 43, 44, 45, 42], $array);
	Assert::same([41, 43, 44, 45, 42], $arrayWithRemovedValue);
})();

(function () {
	$array = [41, 42, 43, 44, 45];

	$arrayWithRemovedValue = remove($array, 46);
	Assert::same([41, 42, 43, 44, 45], $array);
	Assert::same([41, 42, 43, 44, 45], $arrayWithRemovedValue);
})();
