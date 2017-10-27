<?php

declare(strict_types = 1);

namespace Arrays;


/**
 * Returns an {@see \Iterator} over $array.
 */
function iterator(array $array): \Iterator
{
	return new \ArrayIterator($array);
}
