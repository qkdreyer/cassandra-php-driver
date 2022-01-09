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
 * A PHP representation of an aggregate
 */
interface Aggregate
{
    /**
     * Returns the full name of the aggregate
     *
     * @return string Full name of the aggregate including name and types
     */
    public function name(): string;

    /**
     * Returns the simple name of the aggregate
     *
     * @return string Simple name of the aggregate
     */
    public function simpleName(): string;

    /**
     * Returns the argument types of the aggregate
     *
     * @return array Argument types of the aggregate
     */
    public function argumentTypes(): array;

    /**
     * Returns the final function of the aggregate
     *
     * @return \Cassandra\Function_ Final function of the aggregate
     */
    public function finalFunction(): \Cassandra\Function_;

    /**
     * Returns the state function of the aggregate
     *
     * @return \Cassandra\Function_ State function of the aggregate
     */
    public function stateFunction(): \Cassandra\Function_;

    /**
     * Returns the initial condition of the aggregate
     *
     * @return \Cassandra\Value Initial condition of the aggregate
     */
    public function initialCondition(): \Cassandra\Value;

    /**
     * Returns the return type of the aggregate
     *
     * @return \Cassandra\Type Return type of the aggregate
     */
    public function returnType(): \Cassandra\Type;

    /**
     * Returns the state type of the aggregate
     *
     * @return \Cassandra\Type State type of the aggregate
     */
    public function stateType(): \Cassandra\Type;

    /**
     * Returns the signature of the aggregate
     *
     * @return string Signature of the aggregate (same as name())
     */
    public function signature(): string;
}
