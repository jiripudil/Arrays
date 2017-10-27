<?php

declare(strict_types = 1);

namespace Arrays\Tests;

use Arrays\EmptyArrayException;
use function Arrays\head;
use Tester\Assert;


require_once __DIR__ . '/bootstrap.php';

(function () {
	$array = [41, 42, 43, 44, 45];
	$head = head($array);
	Assert::same(41, $head);
})();

(function () {
	$array = [];
	Assert::throws(function () use ($array) {
		head($array);
	}, EmptyArrayException::class);
})();
