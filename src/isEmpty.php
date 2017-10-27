<?php

declare(strict_types = 1);

namespace Arrays;


/**
 * Returns whether $array contains any elements or not.
 */
function isEmpty(array $array): bool
{
	return empty($array);
}
