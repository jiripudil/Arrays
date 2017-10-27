<?php

declare(strict_types = 1);

namespace Arrays;


/**
 * Prepends $value to $array and returns the resulting array.
 */
function prepend(array $array, $value): array
{
	// make sure we don't mangle with the array
	$copy = $array;

	\array_unshift($copy, $value);
	return $copy;
}
