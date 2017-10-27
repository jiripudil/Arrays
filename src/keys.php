<?php

declare(strict_types = 1);

namespace Arrays;


/**
 * Returns an array of keys (indices) of the original $array.
 */
function keys(array $array): array
{
	return \array_keys($array);
}
