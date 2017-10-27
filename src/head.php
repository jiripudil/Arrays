<?php

declare(strict_types = 1);

namespace Arrays;


/**
 * Returns the first element of $array. Throws {@see EmptyArrayException} if invoked with an empty array.
 *
 * @throws EmptyArrayException
 */
function head(array $array)
{
	// make sure we don't mangle with the array
	$copy = $array;

	$head = \reset($copy);
	if ($head === FALSE) {
		throw new EmptyArrayException(__FUNCTION__);
	}

	return $head;
}
