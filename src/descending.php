<?php

declare(strict_types = 1);

namespace Arrays;


/**
 * Creates a comparator function that sorts the values in descending order.
 */
function descending(): callable
{
	return function ($a, $b): int {
		return $b <=> $a;
	};
}
