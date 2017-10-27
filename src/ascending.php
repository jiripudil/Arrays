<?php

declare(strict_types = 1);

namespace Arrays;


/**
 * Creates a comparator function that sorts the values in ascending order.
 */
function ascending(): callable
{
	return function ($a, $b): int {
		return $a <=> $b;
	};
}
