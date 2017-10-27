<?php

declare(strict_types = 1);

namespace Arrays;


/**
 * Sorts $array using provided $comparator and returns the sorted array.
 * If the comparator is omitted, it defaults to {@see ascending()} comparator.
 */
function sort(array $array, ?callable $comparator = NULL): array
{
	if ($comparator === NULL) {
		$comparator = ascending();
	}

	// make sure we don't mangle with the input array
	$copy = $array;

	\usort($copy, $comparator);
	return $copy;
}
