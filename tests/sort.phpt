<?php

declare(strict_types = 1);

namespace Arrays\Tests;

use function Arrays\sort;
use Tester\Assert;


require_once __DIR__ . '/bootstrap.php';

(function () {
	$array = [43, 41, 45, 44, 42];

	$ascending = sort($array);
	$descending = sort($array, function (int $a, int $b): int {
		return $b <=> $a;
	});

	Assert::same([43, 41, 45, 44, 42], $array);
	Assert::same([41, 42, 43, 44, 45], $ascending);
	Assert::same([45, 44, 43, 42, 41], $descending);
})();
