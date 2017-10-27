<?php

declare(strict_types = 1);

namespace Arrays;


/**
 * Calls given $callback for each element of $array. It does not modify the array in any way.
 */
function each(array $array, callable $callback): void
{
	foreach ($array as $item) {
		$callback($item);
	}
}
