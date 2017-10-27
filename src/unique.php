<?php

declare(strict_types = 1);

namespace Arrays;


/**
 * Returns the elements of $array with duplicate values removed.
 */
function unique(array $array): array
{
	return values(
		\array_unique($array)
	);
}
