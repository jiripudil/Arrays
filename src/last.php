<?php

declare(strict_types = 1);

namespace Arrays;


/**
 * Returns the last element of $array. Throws {@see Arrays\EmptyArrayException} if invoked with an empty array.
 *
 * @throws EmptyArrayException
 */
function last(array $array)
{
	// make sure we don't mangle with the array
	$copy = $array;

	$last = \end($copy);
	if ($last === FALSE) {
		throw new EmptyArrayException(__FUNCTION__);
	}

	return $last;
}
