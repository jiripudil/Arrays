<?php

declare(strict_types = 1);

namespace Arrays\Tests;

use function Arrays\unique;
use Tester\Assert;


require_once __DIR__ . '/bootstrap.php';

(function () {
	$array = [41, 42, 43, 42, 44, 45, 42];
	$unique = unique($array);
	Assert::same([41, 42, 43, 44, 45], $unique);
})();
