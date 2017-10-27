<?php

declare(strict_types = 1);

namespace Arrays;


/**
 * Applies $reducer to the elements of $array iteratively to reduce the array to a single value.
 */
function reduce(array $array, callable $reducer, $initial)
{
	return \array_reduce($array, $reducer, $initial);
}
