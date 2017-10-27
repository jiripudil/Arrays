<?php

declare(strict_types = 1);

namespace Arrays;


/**
 * Returns all elements of $array and reindexes them starting from zero.
 */
function values(array $array): array
{
	return \array_values($array);
}
