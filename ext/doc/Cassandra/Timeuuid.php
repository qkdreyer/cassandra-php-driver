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
 * A PHP representation of the CQL `timeuuid` datatype
 */
final class Timeuuid implements \Stringable, Value, UuidInterface
{
    /**
     * Creates a timeuuid from a given timestamp or current time.
     *
     * @param int $timestamp Unix timestamp
     */
    public function __construct(int $timestamp = null)
    {
    }

    /**
     * Returns this timeuuid as string.
     *
     * @return string timeuuid
     */
    public function __toString(): string
    {
    }

    /**
     * The type of this timeuuid.
     *
     * @return \Cassandra\Type
     */
    public function type(): \Cassandra\Type
    {
    }

    /**
     * Returns this timeuuid as string.
     *
     * @return string timeuuid
     */
    public function uuid(): string
    {
    }

    /**
     * Returns the version of this timeuuid.
     *
     * @return int version of this timeuuid
     */
    public function version(): int
    {
    }

    /**
     * Unix timestamp.
     *
     * @return int seconds
     *
     * @see time
     */
    public function time(): int
    {
    }

    /**
     * Converts current timeuuid to PHP DateTime.
     *
     * @return \DateTime PHP representation
     */
    public function toDateTime(): \DateTime
    {
    }
}
