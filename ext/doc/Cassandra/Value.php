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
 * Common interface implemented by all Cassandra value types.
 *
 * @see \Cassandra\Bigint
 * @see \Cassandra\Smallint
 * @see \Cassandra\Tinyint
 * @see \Cassandra\Blob
 * @see \Cassandra\Collection
 * @see \Cassandra\Float
 * @see \Cassandra\Inet
 * @see \Cassandra\Map
 * @see \Cassandra\Set
 * @see \Cassandra\Timestamp
 * @see \Cassandra\Timeuuid
 * @see \Cassandra\Uuid
 * @see \Cassandra\Varint
 * @see \Cassandra\Date
 * @see \Cassandra\Time
 *
 * @see \Cassandra\Numeric
 * @see \Cassandra\UuidInterface
 */
interface Value
{
    /**
     * The type of represented by the value.
     *
     * @return \Cassandra\Type
     */
    public function type(): \Cassandra\Type;
}
