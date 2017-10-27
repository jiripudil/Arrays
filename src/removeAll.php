<?php

declare(strict_types = 1);

namespace Arrays;


/**
 * Removes all occurrences of $value from $array and returns the resulting array.
 * It does nothing if $value is not found in $array.
 */
function removeAll(array $array, $value): array
{
	while (contains($array, $value)) {
		// make sure we don't mangle with the array
		$copy = $array;

		$index = \array_search($value, $copy, TRUE);
		unset($copy[$index]);

		$array = values($copy);
	}

	return $array;
}
