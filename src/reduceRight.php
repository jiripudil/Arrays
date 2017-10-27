<?php

declare(strict_types = 1);

namespace Arrays;


/**
 * Applies $reducer to the elements of $array, in reversed order, iteratively to reduce the array to a single value.
 */
function reduceRight(array $array, callable $reducer, $initial)
{
	return reduce(
		reverse($array),
		$reducer,
		$initial
	);
}
