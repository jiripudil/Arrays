<?php

declare(strict_types = 1);

namespace Arrays;


/**
 * Merges $arrays together and returns the result.
 */
function concat(array ...$arrays): array
{
	return \array_merge(...$arrays);
}
