<?php

declare(strict_types = 1);

namespace Arrays\Tests;

use function Arrays\any;
use Tester\Assert;


require_once __DIR__ . '/bootstrap.php';

(function () {
	$array = [41, 42, 43, 44, 45];
	$any = any($array, function (int $number): bool {
		return $number > 44;
	});

	Assert::true($any);
})();

(function () {
	$array = [41, 42, 43, 44, 45];
	$any = any($array, function (int $number): bool {
		return $number > 45;
	});

	Assert::false($any);
})();

(function () {
	$array = [];
	$any = any($array, function (int $number): bool {
		return $number > 45;
	});

	Assert::false($any);
})();
