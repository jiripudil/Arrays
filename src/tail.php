<?php

declare(strict_types = 1);

namespace Arrays;


/**
 * Returns all the elements of $array except the first one.
 */
function tail(array $array): array
{
	return \array_slice($array, 1);
}
