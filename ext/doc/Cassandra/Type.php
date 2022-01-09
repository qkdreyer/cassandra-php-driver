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
 * Cluster object is used to create Sessions.
 */
abstract class Type implements \Stringable
{
    /**
     * Returns the name of this type as string.
     *
     * @return string Name of this type
     */
    public abstract function name(): string;

    /**
     * Returns string representation of this type.
     *
     * @return string String representation of this type
     */
    public abstract function __toString(): string;

    /**
     * Get representation of ascii type
     *
     * @return \Cassandra\Type ascii type
     */
    public static final function ascii(): \Cassandra\Type
    {
    }

    /**
     * Get representation of bigint type
     *
     * @return \Cassandra\Type bigint type
     */
    public static final function bigint(): \Cassandra\Type
    {
    }

    /**
     * Get representation of smallint type
     *
     * @return \Cassandra\Type smallint type
     */
    public static final function smallint(): \Cassandra\Type
    {
    }

    /**
     * Get representation of tinyint type
     *
     * @return \Cassandra\Type tinyint type
     */
    public static final function tinyint(): \Cassandra\Type
    {
    }

    /**
     * Get representation of blob type
     *
     * @return \Cassandra\Type blob type
     */
    public static final function blob(): \Cassandra\Type
    {
    }

    /**
     * Get representation of boolean type
     *
     * @return \Cassandra\Type boolean type
     */
    public static final function boolean(): \Cassandra\Type
    {
    }

    /**
     * Get representation of counter type
     *
     * @return \Cassandra\Type counter type
     */
    public static final function counter(): \Cassandra\Type
    {
    }

    /**
     * Get representation of decimal type
     *
     * @return \Cassandra\Type decimal type
     */
    public static final function decimal(): \Cassandra\Type
    {
    }

    /**
     * Get representation of double type
     *
     * @return \Cassandra\Type double type
     */
    public static final function double(): \Cassandra\Type
    {
    }

    /**
     * Get representation of duration type
     *
     * @return \Cassandra\Type duration type
     */
    public static final function duration(): \Cassandra\Type
    {
    }

    /**
     * Get representation of float type
     *
     * @return \Cassandra\Type float type
     */
    public static final function float(): \Cassandra\Type
    {
    }

    /**
     * Get representation of int type
     *
     * @return \Cassandra\Type int type
     */
    public static final function int(): \Cassandra\Type
    {
    }

    /**
     * Get representation of text type
     *
     * @return \Cassandra\Type text type
     */
    public static final function text(): \Cassandra\Type
    {
    }

    /**
     * Get representation of timestamp type
     *
     * @return \Cassandra\Type timestamp type
     */
    public static final function timestamp(): \Cassandra\Type
    {
    }

    /**
     * Get representation of date type
     *
     * @return \Cassandra\Type date type
     */
    public static final function date(): \Cassandra\Type
    {
    }

    /**
     * Get representation of time type
     *
     * @return \Cassandra\Type time type
     */
    public static final function time(): \Cassandra\Type
    {
    }

    /**
     * Get representation of uuid type
     *
     * @return \Cassandra\Type uuid type
     */
    public static final function uuid(): \Cassandra\Type
    {
    }

    /**
     * Get representation of varchar type
     *
     * @return \Cassandra\Type varchar type
     */
    public static final function varchar(): \Cassandra\Type
    {
    }

    /**
     * Get representation of varint type
     *
     * @return \Cassandra\Type varint type
     */
    public static final function varint(): \Cassandra\Type
    {
    }

    /**
     * Get representation of timeuuid type
     *
     * @return \Cassandra\Type timeuuid type
     */
    public static final function timeuuid(): \Cassandra\Type
    {
    }

    /**
     * Get representation of inet type
     *
     * @return \Cassandra\Type inet type
     */
    public static final function inet(): \Cassandra\Type
    {
    }

    /**
     * Initialize a Collection type
     * @code{.php}
     * <?php
     * use Type;
     *
     * $collection = Type::collection(Type::int())
     *                   ->create(1, 2, 3, 4, 5, 6, 7, 8, 9);
     *
     * var_dump($collection);
     * @endcode
     *
     * @param \Cassandra\Type $type The type of values
     *
     * @return \Cassandra\Type The collection type
     */
    public static final function collection(\Cassandra\Type $type): \Cassandra\Type
    {
    }

    /**
     * Initialize a set type
     * @code{.php}
     * <?php
     * use Type;
     *
     * $set = Type::set(Type::varchar())
     *            ->create("a", "b", "c", "d", "e", "f", "g", "h", "i", "j");
     *
     * var_dump($set);
     * @endcode
     *
     * @param \Cassandra\Type $type The types of values
     *
     * @return \Cassandra\Type The set type
     */
    public static final function set(\Cassandra\Type $type): \Cassandra\Type
    {
    }

    /**
     * Initialize a map type
     * @code{.php}
     * <?php
     * use Type;
     *
     * $map = Type::map(Type::int(), Type::varchar())
     *            ->create(1, "a", 2, "b", 3, "c", 4, "d", 5, "e", 6, "f")
     *
     * var_dump($map);
     * @endcode
     *
     * @param \Cassandra\Type $keyType The type of keys
     * @param \Cassandra\Type $valueType The type of values
     *
     * @return \Cassandra\Type The map type
     */
    public static final function map(\Cassandra\Type $keyType, \Cassandra\Type $valueType): \Cassandra\Type
    {
    }

    /**
     * Initialize a tuple type
     * @code{.php}
     * <?php
     * use Type;
     *
     * $tuple = Type::tuple(Type::varchar(), Type::int())
     *            ->create("a", 123);
     *
     * var_dump($tuple);
     * @endcode
     *
     * @param \Cassandra\Type $types A variadic list of types
     *
     * @return \Cassandra\Type The tuple type
     */
    public static final function tuple(\Cassandra\Type $types = null): \Cassandra\Type
    {
    }

    /**
     * Initialize a user type
     * @code{.php}
     * <?php
     * use Type;
     *
     * $userType = Type::userType("a", Type::varchar(), "b", Type::int())
     *                 ->create("a", "abc", "b", 123);
     *
     * var_dump($userType);
     * @endcode
     *
     * @param \Cassandra\Type $types A variadic list of name/type pairs
     *
     * @return \Cassandra\Type The user type
     */
    public static final function userType(\Cassandra\Type $types = null): \Cassandra\Type
    {
    }
}
