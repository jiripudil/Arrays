<?php

declare(strict_types = 1);

namespace Arrays;


/**
 * Extracts a slice of $array, starting from $offset and with a length of $length,
 * or to the end of the array if length is not provided.
 */
function slice(array $array, int $offset, ?int $length = NULL): array
{
	return \array_slice($array, $offset, $length);
}
