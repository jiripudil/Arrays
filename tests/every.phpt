<?php

declare(strict_types = 1);

namespace Arrays\Tests;

use function Arrays\every;
use Tester\Assert;


require_once __DIR__ . '/bootstrap.php';

(function () {
	$array = [41, 42, 43, 44, 45];
	$every = every($array, function (int $number): bool {
		return $number > 44;
	});

	Assert::false($every);
})();

(function () {
	$array = [41, 42, 43, 44, 45];
	$every = every($array, function (int $number): bool {
		return $number > 40;
	});

	Assert::true($every);
})();

(function () {
	$array = [];
	$every = every($array, function (int $number): bool {
		return $number > 45;
	});

	Assert::true($every);
})();
