<?php

declare(strict_types = 1);

namespace Arrays;


/**
 * Removes the first occurrence of $value from $array and returns the resulting array.
 * It does nothing if $value is not found in $array.
 */
function remove(array $array, $value): array
{
	// make sure we don't mangle with the array
	$copy = $array;

	$index = \array_search($value, $copy, TRUE);
	if ($index !== FALSE) {
		unset($copy[$index]);
	}

	return values($copy);
}
