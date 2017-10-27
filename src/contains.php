<?php

declare(strict_types = 1);

namespace Arrays;


/**
 * Returns whether $value is contained within $array.
 */
function contains(array $array, $value): bool
{
	return \in_array($value, $array, TRUE);
}
