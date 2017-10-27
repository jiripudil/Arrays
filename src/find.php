<?php

declare(strict_types = 1);

namespace Arrays;


/**
 * Returns the first element of $array for which $predicate is true,
 * or FALSE if it's not true for any element of the array.
 */
function find(array $array, callable $predicate)
{
	try {
		return head(
			filter($array, $predicate)
		);

	} catch (EmptyArrayException $e) {
		return FALSE;
	}
}
