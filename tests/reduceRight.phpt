<?php

declare(strict_types = 1);

namespace Arrays\Tests;

use function Arrays\reduceRight;
use Tester\Assert;


require_once __DIR__ . '/bootstrap.php';

(function () {
	$array = ['a', 'b', 'c'];
	$reduced = reduceRight($array, function (string $carry, string $item): string {
		return $carry . $item;
	}, '');

	Assert::same('cba', $reduced);
})();
