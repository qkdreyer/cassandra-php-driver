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
 * A session is used to prepare and execute statements.
 *
 * @see \Cassandra\Cluster::connect()
 * @see \Cassandra\Cluster::connectAsync()
 */
interface Session
{
    /**
     * Execute a query.
     *
     * Available execution options:
     * | Option Name        | Option **Type** | Option Details                                                                                           |
     * |--------------------|-----------------|----------------------------------------------------------------------------------------------------------|
     * | arguments          | array           | An array or positional or named arguments                                                                |
     * | consistency        | int             | A consistency constant e.g Dse::CONSISTENCY_ONE, Dse::CONSISTENCY_QUORUM, etc.                           |
     * | timeout            | int             | A number of rows to include in result for paging                                                         |
     * | paging_state_token | string          | A string token use to resume from the state of a previous result set                                     |
     * | retry_policy       | RetryPolicy     | A retry policy that is used to handle server-side failures for this request                              |
     * | serial_consistency | int             | Either Dse::CONSISTENCY_SERIAL or Dse::CONSISTENCY_LOCAL_SERIAL                                          |
     * | timestamp          | int\|string     | Either an integer or integer string timestamp that represents the number of microseconds since the epoch |
     * | execute_as         | string          | User to execute statement as                                                                             |
     *
     * @param string|\Cassandra\Statement $statement string or statement to be executed.
     * @param array|\Cassandra\ExecutionOptions|null $options Options to control execution of the query.
     *
     * @throws Exception
     *
     * @return \Cassandra\Rows A collection of rows.
     */
    public function execute($statement, $options = null): \Cassandra\Rows;

    /**
     * Execute a query asynchronously. This method returns immediately, but
     * the query continues execution in the background.
     *
     * @param string|\Cassandra\Statement $statement string or statement to be executed.
     * @param array|\Cassandra\ExecutionOptions|null $options Options to control execution of the query.
     *
     * @return \Cassandra\FutureRows A future that can be used to retrieve the result.
     *
     * @see \Cassandra\Session::execute() for valid execution options
     */
    public function executeAsync($statement, $options = null): \Cassandra\FutureRows;

    /**
     * Prepare a query for execution.
     *
     * @param string $cql The query to be prepared.
     * @param array|\Cassandra\ExecutionOptions|null $options Options to control preparing the query.
     *
     * @throws Exception
     *
     * @return \Cassandra\PreparedStatement A prepared statement that can be bound with parameters and executed.
     *
     * @see \Cassandra\Session::execute() for valid execution options
     */
    public function prepare(string $cql, $options = null): \Cassandra\PreparedStatement;

    /**
     * Asynchronously prepare a query for execution.
     *
     * @param string $cql The query to be prepared.
     * @param array|\Cassandra\ExecutionOptions|null $options Options to control preparing the query.
     *
     * @return \Cassandra\FuturePreparedStatement A future that can be used to retrieve the prepared statement.
     *
     * @see \Cassandra\Session::execute() for valid execution options
     */
    public function prepareAsync(string $cql, $options = null): \Cassandra\FuturePreparedStatement;

    /**
     * Close the session and all its connections.
     *
     * @param float $timeout The amount of time in seconds to wait for the session to close.
     *
     * @throws Exception
     *
     * @return void Nothing.
     */
    public function close(float $timeout = null): void;

    /**
     * Asynchronously close the session and all its connections.
     *
     * @return \Cassandra\FutureClose A future that can be waited on.
     */
    public function closeAsync(): \Cassandra\FutureClose;

    /**
     * Get performance and diagnostic metrics.
     *
     * @return array Performance/Diagnostic metrics.
     */
    public function metrics(): array;

    /**
     * Get a snapshot of the cluster's current schema.
     *
     * @return \Cassandra\Schema A snapshot of the cluster's schema.
     */
    public function schema(): \Cassandra\Schema;
}
