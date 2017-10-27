<?php

declare(strict_types = 1);

namespace Arrays\Tests;

use function Arrays\each;
use Tester\Assert;


require_once __DIR__ . '/bootstrap.php';

(function () {
	$array = [41, 42, 43, 44, 45];
	$new = [];
	each($array, function (int $number) use (&$new): void {
		$new[] = $number;
	});

	Assert::same([41, 42, 43, 44, 45], $new);
})();
