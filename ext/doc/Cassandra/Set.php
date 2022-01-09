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
 * A PHP representation of the CQL `set` datatype
 */
final class Set implements Value, \Countable, \Iterator
{
    /**
     * Creates a new collection of a given type.
     *
     * @param \Cassandra\Type $type
     */
    public function __construct(\Cassandra\Type $type)
    {
    }

    /**
     * The type of this set.
     *
     * @return \Cassandra\Type
     */
    public function type(): \Cassandra\Type
    {
    }

    /**
     * Array of values in this set.
     *
     * @return array values
     */
    public function values(): array
    {
    }

    /**
     * Adds a value to this set.
     *
     * @param mixed $value Value
     *
     * @return bool whether the value has been added
     */
    public function add(mixed $value): bool
    {
    }

    /**
     * Returns whether a value is in this set.
     *
     * @param mixed $value Value
     *
     * @return bool whether the value is in the set
     */
    public function has(mixed $value): bool
    {
    }

    /**
     * Removes a value to this set.
     *
     * @param mixed $value Value
     *
     * @return bool whether the value has been removed
     */
    public function remove(mixed $value): bool
    {
    }

    /**
     * Total number of elements in this set
     *
     * @return int count
     */
    public function count(): int
    {
    }

    /**
     * Current element for iteration
     *
     * @return mixed current element
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
}
