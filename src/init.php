<?php

declare(strict_types = 1);

namespace Arrays;


/**
 * Returns all the elements of $array except the last one.
 */
function init(array $array): array
{
	return \array_slice($array, 0, -1);
}
