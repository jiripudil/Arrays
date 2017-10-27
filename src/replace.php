<?php

declare(strict_types = 1);

namespace Arrays;


/**
 * Replaces the first occurrence of $value in $array with $newValue and returns the resulting array.
 * It does nothing if $value is not found in $array.
 */
function replace(array $array, $value, $newValue): array
{
	// make sure we don't mangle with the array
	$copy = $array;

	$index = \array_search($value, $copy, TRUE);
	if ($index !== FALSE) {
		$copy[$index] = $newValue;
	}

	return values($copy);
}
