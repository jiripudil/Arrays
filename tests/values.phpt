<?php

declare(strict_types = 1);

namespace Arrays\Tests;

use function Arrays\values;
use Tester\Assert;


require_once __DIR__ . '/bootstrap.php';

(function () {
	$array = [5 => 41, 15 => 42, 1 => 43, 7 => 44, 12 => 45];
	$values = values($array);
	Assert::same([41, 42, 43, 44, 45], $values);
})();
