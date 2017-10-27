<?php

declare(strict_types = 1);

namespace Arrays\Tests;

use function Arrays\iterator;
use Tester\Assert;


require_once __DIR__ . '/bootstrap.php';

(function () {
	$array = [41, 42, 43, 44, 45];
	$iterator = iterator($array);
	Assert::type(\ArrayIterator::class, $iterator);
	Assert::same(5, \iterator_count($iterator));
})();
