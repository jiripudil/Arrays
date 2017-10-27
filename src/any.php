<?php

declare(strict_types = 1);

namespace Arrays;


/**
 * Returns whether $predicate is true for at least one element of $array.
 */
function any(array $array, callable $predicate): bool
{
	foreach ($array as $item) {
		if ($predicate($item) === TRUE) {
			return TRUE;
		}
	}

	return FALSE;
}
