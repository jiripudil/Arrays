<?php

declare(strict_types = 1);

namespace Arrays\Tests;

use function Arrays\descending;
use Tester\Assert;


require_once __DIR__ . '/bootstrap.php';

(function () {
	$comparator = descending();
	Assert::same(1, $comparator(41, 42));
	Assert::same(0, $comparator(42, 42));
	Assert::same(-1, $comparator(42, 41));
})();
