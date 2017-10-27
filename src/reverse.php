<?php

declare(strict_types = 1);

namespace Arrays;


/**
 * Returns the original $array with elements in reversed order.
 */
function reverse(array $array): array
{
	return \array_reverse($array);
}
