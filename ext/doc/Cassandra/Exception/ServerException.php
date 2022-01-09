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

namespace Cassandra\Exception;

/**
 * ServerException is raised when something unexpected happened on the server.
 * This exception is most likely due to a server-side bug.
 * **NOTE** This exception and all its children are generated on the server.
 */
class ServerException extends RuntimeException
{
    /**
     * @param string $message
     * @param int $code
     * @param \Exception $previous
     */
    public function __construct(string $message = '', int $code = 0, \Exception $previous = null)
    {
    }

    /**
     * @return void
     */
    public function __wakeup(): void
    {
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
    }
}
