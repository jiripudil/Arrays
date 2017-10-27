<?php

declare(strict_types = 1);

namespace Arrays\Tests;

use function Arrays\map;
use Tester\Assert;


require_once __DIR__ . '/bootstrap.php';

(function () {
	$array = [41, 42, 43, 44, 45];
	$mapped = map($array, function (int $value): string {
		return (string) $value;
	});

	Assert::same(['41', '42', '43', '44', '45'], $mapped);
})();
