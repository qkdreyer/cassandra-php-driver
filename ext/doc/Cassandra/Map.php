<?php

/**
 * Copyright 2017 DataStax, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Cassandra;

/**
 * A PHP representation of the CQL `map` datatype
 */
final class Map implements Value, \Countable, \Iterator, \ArrayAccess
{
    /**
     * Creates a new map of a given key and value type.
     *
     * @param \Cassandra\Type $keyType
     * @param \Cassandra\Type $valueType
     */
    public function __construct(\Cassandra\Type $keyType, \Cassandra\Type $valueType)
    {
    }

    /**
     * The type of this map.
     *
     * @return \Cassandra\Type
     */
    public function type(): \Cassandra\Type
    {
    }

    /**
     * Returns all keys in the map as an array.
     *
     * @return array keys
     */
    public function keys(): array
    {
    }

    /**
     * Returns all values in the map as an array.
     *
     * @return array values
     */
    public function values(): array
    {
    }

    /**
     * Sets key/value in the map.
     *
     * @param mixed $key key
     * @param mixed $value value
     *
     * @return mixed
     */
    public function set(mixed $key, mixed $value): mixed
    {
    }

    /**
     * Gets the value of the key in the map.
     *
     * @param mixed $key Key
     *
     * @return mixed Value or null
     */
    public function get(mixed $key): mixed
    {
    }

    /**
     * Removes the key from the map.
     *
     * @param mixed $key Key
     *
     * @return bool Whether the key was removed or not, e.g. didn't exist
     */
    public function remove(mixed $key): bool
    {
    }

    /**
     * Returns whether the key is in the map.
     *
     * @param mixed $key Key
     *
     * @return bool Whether the key is in the map or not
     */
    public function has(mixed $key): bool
    {
    }

    /**
     * Total number of elements in this map
     *
     * @return int count
     */
    public function count(): int
    {
    }

    /**
     * Current value for iteration
     *
     * @return mixed current value
     */
    public function current(): mixed
    {
    }

    /**
     * Current key for iteration
     *
     * @return int current key
     */
    public function key(): int
    {
    }

    /**
     * Move internal iterator forward
     *
     * @return void
     */
    public function next(): void
    {
    }

    /**
     * Rewind internal iterator
     *
     * @return void
     */
    public function rewind(): void
    {
    }

    /**
     * Check whether a current value exists
     *
     * @return bool
     */
    public function valid(): bool
    {
    }

    /**
     * Whether or not an offset exists.
     *
     * @param mixed $offset An offset to check for.
     *
     * @throws Exception\InvalidArgumentException when the type of key is wrong
     *
     * @return bool Whether the value at a given key is present
     *
     * @see \ArrayAccess::offsetExists()
     */
    public function offsetExists(mixed $offset): bool
    {
    }

    /**
     * Returns the value at specified offset.
     *
     * @param mixed $offset The offset to retrieve.
     *
     * @throws Exception\InvalidArgumentException when the type of key is wrong
     *
     * @return mixed Value or `null`
     *
     * @see \ArrayAccess::offsetGet()
     */
    public function offsetGet(mixed $offset): mixed
    {
    }

    /**
     * Assigns a value to the specified offset.
     *
     * @param mixed $offset The offset to assign the value to.
     * @param mixed $value The value to set.
     *
     * @throws Exception\InvalidArgumentException when the type of key or value is wrong
     *
     * @return void
     *
     * @see \ArrayAccess::offsetSet()
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
    }

    /**
     * Unsets an offset.
     *
     * @param mixed $offset The offset to unset.
     *
     * @throws Exception\InvalidArgumentException when the type of key is wrong
     *
     * @return void
     *
     * @see \ArrayAccess::offsetUnset()
     */
    public function offsetUnset(mixed $offset): void
    {
    }
}
