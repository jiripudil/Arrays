<?php

declare(strict_types = 1);

namespace Arrays\Tests;

use function Arrays\filter;
use Tester\Assert;


require_once __DIR__ . '/bootstrap.php';

(function () {
	$array = [41, 42, 43, 44, 45];
	$filtered = filter($array, function (int $value): bool {
		return $value > 43;
	});

	Assert::same([44, 45], $filtered);
})();
