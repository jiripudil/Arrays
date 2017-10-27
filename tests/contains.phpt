<?php

declare(strict_types = 1);

namespace Arrays\Tests;

use function Arrays\contains;
use Tester\Assert;


require_once __DIR__ . '/bootstrap.php';

(function () {
	$array = [41, 42, 43, 44, 45];
	Assert::true(contains($array, 44));
	Assert::false(contains($array, 46));
	Assert::false(contains($array, '44'));
})();
