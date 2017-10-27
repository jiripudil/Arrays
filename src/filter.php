<?php

declare(strict_types = 1);

namespace Arrays;


/**
 * Returns a new array containing only the elements of the original $array
 * for which $predicate is true.
 */
function filter(array $array, callable $predicate): array
{
	return values(
		\array_filter($array, $predicate)
	);
}
