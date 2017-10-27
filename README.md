# Arrays

Arrays is a collection of handy functions that facilitate working with arrays as lists in PHP.

The main goals of this package are:

- to provide a unified API for working with arrays so that you don't need to remember which argument comes first - the array is always the first;
- to add features that are handy but don't have a simple native counterpart, like JavaScript's `Array.find` or Haskell's `head`, `tail`, `init` and `last`;
- to maintain immutability so that you don't have to think whether this function returns a new array or operates on the original one.


## Installation

```sh
$ composer require jiripudil/arrays
```


## Reference

### `Arrays\any(array $array, callable $predicate): bool`

Returns whether `$predicate` is true for at least one element of `$array`.


### `Arrays\append(array $array, mixed $value): array`

Appends `$value` to `$array` and returns the resulting array.


### `Arrays\chunk(array $array, int $size): array`

Splits `$array` into chunks, each being an array with `$size` elements. The last chunk might contain less elements.


### `Arrays\concat(array ...$arrays): array`

Merges `$arrays` together and returns the result.


### `Arrays\contains(array $array, mixed $value): bool`

Returns whether `$value` is contained within `$array`.


### `Arrays\each(array $array, callable $callback): void`

Calls given `$callback` for each element of `$array`. It does not modify the array in any way.


### `Arrays\every(array $array, callable $predicate): bool`

Returns whether `$predicate` is true for all elements of `$array`.


### `Arrays\filter(array $array, callable $predicate): array`

Returns a new array containing only the elements of the original `$array` for which `$predicate` is true.


### `Arrays\find(array $array, callable $predicate): mixed|FALSE`

Returns the first element of `$array` for which `$predicate` is true, or `FALSE` if it's not true for any element of the array.


### `Arrays\fromIterator(\Iterator $iterator): array`

Creates a new array from given `$iterator`.


### `Arrays\head(array $array): mixed`

Returns the first element of `$array`. Throws `Arrays\EmptyArrayException` if invoked with an empty array.


### `Arrays\indexOf(array $array, mixed $value): int|FALSE`

Returns the index of the first occurrence of `$value` in `$array`, or `FALSE` if it is not found in the array.


### `Arrays\init(array $array): array`

Returns all the elements of `$array` except the last one.


### `Arrays\isEmpty(array $array): bool`

Returns whether `$array` contains any elements or not.


### `Arrays\iterator(array $array): \Iterator`

Returns an `\Iterator` over `$array`.


### `Arrays\keys(array $array): array`

Returns an array of keys (indices) of the original `$array`.


### `Arrays\last(array $array): mixed`

Returns the last element of `$array`. Throws `Arrays\EmptyArrayException` if invoked with an empty array.


### `Arrays\length(array $array): int`

Returns the number of elements in `$array`.


### `Arrays\map(array $array, callable $callback): array`

Returns an array containing all elements of `$array` after applying `$callback` to each one.


### `Arrays\prepend(array $array, mixed $value): array`

Prepends `$value` to `$array` and returns the resulting array.


### `Arrays\reduce(array $array, callable $reducer, mixed $initial): mixed`

Applies `$reducer` to the elements of `$array` iteratively to reduce the array to a single value.

The reducer is invoked with

- `mixed $carry` which holds the value of the previous iteration, or `$initial` in the first iteration, and
- `mixed $element`, the element of the array from the current iteration.


### `Arrays\reduceRight(array $array, callable $reducer, mixed $initial): mixed`

Does the same as `Arrays\reduce`, i.e. iteratively applies `$reducer` to the elements of `$array`, but in reversed order.


### `Arrays\remove(array $array, mixed $value): array`

Removes the first occurrence of `$value` from `$array` and returns the resulting array. It does nothing if `$value` is not found in `$array`.


### `Arrays\removeAll(array $array, mixed $value): array`

Removes all occurrences of `$value` from `$array` and returns the resulting array. It does nothing if `$value` is not found in `$array`.


### `Arrays\replace(array $array, mixed $value, mixed $newValue): array`

Replaces the first occurrence of `$value` in `$array` with `$newValue` and returns the resulting array. It does nothing if `$value` is not found in `$array`.


### `Arrays\reverse(array $array): array`

Returns the original `$array` with elements in reversed order.


### `Arrays\slice(array $array, int $offset, ?int $length = NULL): array`

Extracts a slice of `$array`, starting from `$offset` and with a length of `$length`, or to the end of the array if length is not provided.


### `Arrays\sort(array $array, ?callable $comparator = Arrays\ascending()): array`

Sorts `$array` using provided `$comparator` and returns the sorted array.

There are two shorthand comparator factory functions:

- `Arrays\ascending(): callable` creates a comparator that sorts the values in ascending order, and
- `Arrays\descending(): callable` creates a comparator that sorts the values in descending order.

If the comparator is omitted, it defaults to the ascending comparator.


### `Arrays\tail(array $array): array`

Returns all the elements of `$array` except the first one.


### `Arrays\unique(array $array): array`

Returns the elements of `$array` with duplicate values removed.


### `Arrays\values(array $array): array`

Returns all elements of `$array` and reindexes them starting from zero.
