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
 * Rows represent a result of statement execution.
 */
final class Rows implements \Countable, \Iterator
{
    /**
     */
    public function __construct()
    {
    }

    /**
     * Check for the last page when paging.
     *
     * @return bool whether this is the last page or not
     */
    public function isLastPage(): bool
    {
    }

    /**
     * Get the next page of results.
     *
     * @param float|null $timeout
     *
     * @return \Cassandra\Rows|null loads and returns next result page
     */
    public function nextPage($timeout = null)
    {
    }

    /**
     * Get the next page of results asynchronously.
     *
     * @return \Cassandra\Future returns future of the next result page
     */
    public function nextPageAsync(): \Cassandra\Future
    {
    }

    /**
     * Returns the raw paging state token.
     *
     * @return string
     */
    public function pagingStateToken(): string
    {
    }

    /**
     * Get the first row.
     *
     * @return array|null returns first row if any
     */
    public function first()
    {
    }

    /**
     * Returns the number of rows.
     *
     * @return int number of rows
     *
     * @see \Countable::count()
     */
    public function count(): int
    {
    }

    /**
     * Returns current row.
     *
     * @return array current row
     *
     * @see \Iterator::current()
     */
    public function current(): array
    {
    }

    /**
     * Returns current index.
     *
     * @return int index
     *
     * @see \Iterator::key()
     */
    public function key(): int
    {
    }

    /**
     * Advances the rows iterator by one.
     *
     * @return void
     *
     * @see \Iterator::next()
     */
    public function next(): void
    {
    }

    /**
     * Resets the rows iterator.
     *
     * @return void
     *
     * @see \Iterator::rewind()
     */
    public function rewind(): void
    {
    }

    /**
     * Returns existence of more rows being available.
     *
     * @return bool whether there are more rows available for iteration
     *
     * @see \Iterator::valid()
     */
    public function valid(): bool
    {
    }

    /**
     * Returns existence of a given row.
     *
     * @param int $offset row index
     *
     * @return bool whether a row at a given index exists
     *
     * @see \ArrayAccess::offsetExists()
     */
    public function offsetExists(int $offset): bool
    {
    }

    /**
     * Returns a row at given index.
     *
     * @param int $offset row index
     *
     * @return array|null row at a given index
     *
     * @see \ArrayAccess::offsetGet()
     */
    public function offsetGet(int $offset)
    {
    }

    /**
     * Assigns a value to the specified offset.
     *
     * @param int $offset row index
     * @param array $value row value
     *
     * @throws Exception\DomainException
     *
     * @return void
     *
     * @see \ArrayAccess::offsetSet()
     */
    public function offsetSet(int $offset, array $value): void
    {
    }

    /**
     * Removes a row at given index.
     *
     * @param int $offset row index
     *
     * @throws Exception\DomainException
     *
     * @return void
     *
     * @see \ArrayAccess::offsetUnset()
     */
    public function offsetUnset(int $offset): void
    {
    }
}
