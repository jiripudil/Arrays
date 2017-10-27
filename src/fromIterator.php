<?php

declare(strict_types = 1);

namespace Arrays;


/**
 * Creates a new array from given $iterator.
 */
function fromIterator(\Iterator $iterator): array
{
	return \iterator_to_array($iterator, FALSE);
}
