<?php

declare(strict_types = 1);

namespace Arrays\Tests;

use function Arrays\indexOf;
use Tester\Assert;


require_once __DIR__ . '/bootstrap.php';

(function () {
	$array = [41, 42, 43, 44, 45];
	Assert::same(2, indexOf($array, 43));
})();
