<?php

declare(strict_types = 1);

namespace Arrays;


final class EmptyArrayException extends \RuntimeException
{

	public function __construct(string $functionName)
	{
		parent::__construct(\sprintf(
			'Arrays\%s() cannot be called on empty array',
			$functionName
		));
	}

}
