<?php

declare(strict_types = 1);

namespace Arrays\Tests;

use Arrays\EmptyArrayException;
use function Arrays\last;
use Tester\Assert;


require_once __DIR__ . '/bootstrap.php';

(function () {
	$array = [41, 42, 43, 44, 45];
	$head = last($array);
	Assert::same(45, $head);
})();

(function () {
	$array = [];
	Assert::throws(function () use ($array) {
		last($array);
	}, EmptyArrayException::class);
})();
