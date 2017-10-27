<?php

declare(strict_types = 1);

namespace Arrays;


/**
 * Returns the index of the first occurrence of $value in $array,
 * or FALSE if it is not found in the array.
 */
function indexOf(array $array, $value)
{
	return \array_search($value, $array, TRUE);
}
