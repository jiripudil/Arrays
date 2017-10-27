<?php

declare(strict_types = 1);

namespace Arrays\Tests;

use function Arrays\keys;
use Tester\Assert;


require_once __DIR__ . '/bootstrap.php';

(function () {
	$array = [5 => 41, 15 => 42, 1 => 43, 7 => 44, 12 => 45];
	$values = keys($array);
	Assert::same([5, 15, 1, 7, 12], $values);
})();
