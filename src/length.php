<?php

declare(strict_types = 1);

namespace Arrays;


/**
 * Returns the number of elements in $array.
 */
function length(array $array): int
{
	return \count($array);
}
