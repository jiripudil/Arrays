<?php

declare(strict_types = 1);

namespace Arrays;


/**
 * Appends $value to $array and returns the resulting array.
 */
function append(array $array, $value): array
{
	// make sure we don't mangle with the array
	$copy = $array;

	\array_push($copy, $value);
	return $copy;
}
