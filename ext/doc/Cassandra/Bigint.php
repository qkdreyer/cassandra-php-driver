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
 * A PHP representation of the CQL `bigint` datatype
 */
final class Bigint implements \Stringable, Value, Numeric
{
    /**
     * Creates a new 64bit integer.
     *
     * @param string $value integer value as a string
     */
    public function __construct(string $value)
    {
    }

    /**
     * Returns string representation of the integer value.
     *
     * @return string integer value
     */
    public function __toString(): string
    {
    }

    /**
     * The type of this bigint.
     *
     * @return \Cassandra\Type
     */
    public function type(): \Cassandra\Type
    {
    }

    /**
     * Returns the integer value.
     *
     * @return string integer value
     */
    public function value(): string
    {
    }

    /**
     * @param \Cassandra\Numeric $num a number to add to this one
     * @return \Cassandra\Numeric sum
     */
    public function add(\Cassandra\Numeric $num): \Cassandra\Numeric
    {
    }

    /**
     * @param \Cassandra\Numeric $num a number to subtract from this one
     * @return \Cassandra\Numeric difference
     */
    public function sub(\Cassandra\Numeric $num): \Cassandra\Numeric
    {
    }

    /**
     * @param \Cassandra\Numeric $num a number to multiply this one by
     * @return \Cassandra\Numeric product
     */
    public function mul(\Cassandra\Numeric $num): \Cassandra\Numeric
    {
    }

    /**
     * @param \Cassandra\Numeric $num a number to divide this one by
     * @return \Cassandra\Numeric quotient
     */
    public function div(\Cassandra\Numeric $num): \Cassandra\Numeric
    {
    }

    /**
     * @param \Cassandra\Numeric $num a number to divide this one by
     * @return \Cassandra\Numeric remainder
     */
    public function mod(\Cassandra\Numeric $num): \Cassandra\Numeric
    {
    }

    /**
     * @return \Cassandra\Numeric absolute value
     */
    public function abs(): \Cassandra\Numeric
    {
    }

    /**
     * @return \Cassandra\Numeric negative value
     */
    public function neg(): \Cassandra\Numeric
    {
    }

    /**
     * @return \Cassandra\Numeric square root
     */
    public function sqrt(): \Cassandra\Numeric
    {
    }

    /**
     * @return int this number as int
     */
    public function toInt(): int
    {
    }

    /**
     * @return float this number as float
     */
    public function toDouble(): float
    {
    }

    /**
     * Minimum possible Bigint value
     *
     * @return \Cassandra\Bigint minimum value
     */
    public static function min(): \Cassandra\Bigint
    {
    }

    /**
     * Maximum possible Bigint value
     *
     * @return \Cassandra\Bigint maximum value
     */
    public static function max(): \Cassandra\Bigint
    {
    }
}
