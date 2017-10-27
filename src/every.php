<?php

declare(strict_types = 1);

namespace Arrays;


/**
 * Returns whether $predicate is true for all elements of $array.
 */
function every(array $array, callable $predicate): bool
{
	foreach ($array as $item) {
		if ($predicate($item) === FALSE) {
			return FALSE;
		}
	}

	return TRUE;
}
