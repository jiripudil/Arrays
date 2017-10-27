<?php

declare(strict_types = 1);

namespace Arrays\Tests;

use function Arrays\fromIterator;
use Tester\Assert;


require_once __DIR__ . '/bootstrap.php';

(function () {
	$iterator = new \ArrayIterator([41, 42, 43, 44, 45]);
	$array = fromIterator($iterator);
	Assert::same([41, 42, 43, 44, 45], $array);
})();
