<?php

declare(strict_types = 1);

namespace Arrays\Tests;

use function Arrays\slice;
use Tester\Assert;


require_once __DIR__ . '/bootstrap.php';

(function () {
	$array = [41, 42, 43, 44, 45];

	$slice = slice($array, 1, 3);
	Assert::same([42, 43, 44], $slice);

	$slice = slice($array, 1, -1);
	Assert::same([42, 43, 44], $slice);

	$slice = slice($array, -1);
	Assert::same([45], $slice);
})();
