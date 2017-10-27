<?php

declare(strict_types = 1);

namespace Arrays\Tests;

use function Arrays\reverse;
use Tester\Assert;


require_once __DIR__ . '/bootstrap.php';

(function () {
	$array = [41, 42, 43, 44, 45];
	$tail = reverse($array);
	Assert::same([45, 44, 43, 42, 41], $tail);
})();
