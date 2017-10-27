<?php

declare(strict_types = 1);

namespace Arrays\Tests;

use function Arrays\find;
use Tester\Assert;


require_once __DIR__ . '/bootstrap.php';

(function () {
	$array = [41, 42, 43, 44, 45];
	$found = find($array, function (int $value): bool {
		return $value > 43;
	});

	Assert::same(44, $found);
})();

(function () {
	$array = [41, 42, 43, 44, 45];
	$found = find($array, function (int $value): bool {
		return $value < 40;
	});

	Assert::false($found);
})();
