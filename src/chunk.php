<?php

declare(strict_types = 1);

namespace Arrays;


/**
 * Splits $array into chunks, each being an array with $size elements.
 * The last chunk might contain less elements.
 */
function chunk(array $array, int $size): array
{
	return \array_chunk($array, $size);
}
