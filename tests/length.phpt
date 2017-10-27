<?php

declare(strict_types = 1);

namespace Arrays\Tests;

use function Arrays\length;
use Tester\Assert;


require_once __DIR__ . '/bootstrap.php';

(function () {
	$array = [41, 42, 43, 44, 45];
	Assert::same(5, length($array));
	Assert::same(0, length([]));
})();
