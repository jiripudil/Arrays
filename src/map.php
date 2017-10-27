<?php

declare(strict_types = 1);

namespace Arrays;


/**
 * Returns an array containing all elements of $array after applying $callback to each one.
 */
function map(array $array, callable $callback): array
{
	return \array_map($callback, $array);
}
