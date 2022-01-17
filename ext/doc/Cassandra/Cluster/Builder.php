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

namespace Cassandra\Cluster;

/**
 * Cluster builder allows fluent configuration of the cluster instance.
 *
 * @see \Cassandra::cluster()
 */
final class Builder
{
    /**
     * Returns a Cluster Instance.
     *
     * @return \Cassandra\Cluster Cluster instance
     */
    public function build(): \Cassandra\Cluster
    {
    }

    /**
     * Configures default consistency for all requests.
     *
     * @param int $consistency A consistency level, must be one of \Cassandra::CONSISTENCY_* values
     *
     * @return \Cassandra\Cluster\Builder self
     */
    public function withDefaultConsistency(int $consistency): \Cassandra\Cluster\Builder
    {
    }

    /**
     * Configures default page size for all results.
     * Set to `null` to disable paging altogether.
     *
     * @param int|null $pageSize default page size
     *
     * @return \Cassandra\Cluster\Builder self
     */
    public function withDefaultPageSize($pageSize): \Cassandra\Cluster\Builder
    {
    }

    /**
     * Configures default timeout for future resolution in blocking operations
     * Set to null to disable (default).
     *
     * @param float|null $timeout Timeout value in seconds, can be fractional
     *
     * @return \Cassandra\Cluster\Builder self
     */
    public function withDefaultTimeout($timeout): \Cassandra\Cluster\Builder
    {
    }

    /**
     * Configures the initial endpoints. Note that the driver will
     * automatically discover and connect to the rest of the cluster.
     *
     * @param string $host ,... one or more ip addresses or hostnames
     *
     * @return \Cassandra\Cluster\Builder self
     */
    public function withContactPoints(string $host): \Cassandra\Cluster\Builder
    {
    }

    /**
     * Specify a different port to be used when connecting to the cluster.
     *
     * @param int $port a number between 1 and 65535
     *
     * @throws \Exception\InvalidArgumentException
     *
     * @return \Cassandra\Cluster\Builder self
     */
    public function withPort(int $port): \Cassandra\Cluster\Builder
    {
    }

    /**
     * Configures this cluster to use a round robin load balancing policy.
     *
     * @return \Cassandra\Cluster\Builder self
     */
    public function withRoundRobinLoadBalancingPolicy(): \Cassandra\Cluster\Builder
    {
    }

    /**
     * Configures this cluster to use a datacenter aware round robin load balancing policy.
     *
     * @param string $localDatacenter Name of the local datacenter
     * @param int $hostPerRemoteDatacenter Maximum number of hosts to try in remote datacenters
     * @param bool $useRemoteDatacenterForLocalConsistencies Allow using hosts from remote datacenters to execute statements with local consistencies
     *
     * @return \Cassandra\Cluster\Builder self
     */
    public function withDatacenterAwareRoundRobinLoadBalancingPolicy(string $localDatacenter, int $hostPerRemoteDatacenter, bool $useRemoteDatacenterForLocalConsistencies): \Cassandra\Cluster\Builder
    {
    }

    /**
     * Sets the blacklist hosts. Any host in the blacklist will be ignored and
     * a conneciton will not be established. This is useful for ensuring that
     * the driver will not connection to a predefied set of hosts.
     *
     * @param string $hosts A comma delimited list of addresses.
     *
     * @return \Cassandra\Cluster\Builder self
     */
    public function withBlackListHosts(string $hosts): \Cassandra\Cluster\Builder
    {
    }

    /**
     * Sets the whitelist hosts. Any host not in the whitelist will be ignored
     * and a connection will not be established. This policy is useful for
     * ensuring that the driver will only connect to a predefined set of hosts.
     *
     * @param string $hosts A comma delimited list of addresses.
     *
     * @return \Cassandra\Cluster\Builder self
     */
    public function withWhiteListHosts(string $hosts): \Cassandra\Cluster\Builder
    {
    }

    /**
     * Sets the blacklist datacenters. Any datacenter in the blacklist will be
     * ignored and a connection will not be established to any host in those
     * datacenters. This policy is useful for ensuring the driver will not
     * connect to any host in a specific datacenter.
     *
     * @param string $dcs A comma delimited list of datacenters.
     *
     * @return \Cassandra\Cluster\Builder self
     */
    public function withBlackListDCs(string $dcs): \Cassandra\Cluster\Builder
    {
    }

    /**
     * Sets the whitelist datacenters. Any host not in a whitelisted datacenter
     * will be ignored. This policy is useful for ensuring the driver will only
     * connect to hosts in specific datacenters.
     *
     * @param string $dcs A comma delimited list of datacenters.
     *
     * @return \Cassandra\Cluster\Builder self
     */
    public function withWhiteListDCs(string $dcs): \Cassandra\Cluster\Builder
    {
    }

    /**
     * Enable token aware routing.
     *
     * @param bool $enabled Whether to enable token aware routing (optional)
     *
     * @return \Cassandra\Cluster\Builder self
     */
    public function withTokenAwareRouting(bool $enabled = null): \Cassandra\Cluster\Builder
    {
    }

    /**
     * Configures plain-text authentication.
     *
     * @param string $username Username
     * @param string $password Password
     *
     * @return \Cassandra\Cluster\Builder self
     */
    public function withCredentials(string $username, string $password): \Cassandra\Cluster\Builder
    {
    }

    /**
     * Timeout used for establishing TCP connections.
     *
     * @param float $timeout Timeout value in seconds, can be fractional
     *
     * @return \Cassandra\Cluster\Builder self
     */
    public function withConnectTimeout(float $timeout): \Cassandra\Cluster\Builder
    {
    }

    /**
     * Timeout used for waiting for a response from a node.
     *
     * @param float $timeout Timeout value in seconds, can be fractional
     *
     * @return \Cassandra\Cluster\Builder self
     */
    public function withRequestTimeout(float $timeout): \Cassandra\Cluster\Builder
    {
    }

    /**
     * Set up ssl context.
     *
     * @param \Cassandra\SSLOptions $options a preconfigured ssl context
     *
     * @return \Cassandra\Cluster\Builder self
     */
    public function withSSL(\Cassandra\SSLOptions $options): \Cassandra\Cluster\Builder
    {
    }

    /**
     * Enable persistent sessions and clusters.
     *
     * @param bool $enabled whether to enable persistent sessions and clusters
     *
     * @return \Cassandra\Cluster\Builder self
     */
    public function withPersistentSessions(bool $enabled = null): \Cassandra\Cluster\Builder
    {
    }

    /**
     * Force the driver to use a specific binary protocol version.
     *
     * Apache Cassandra 1.2+ supports protocol version 1
     * Apache Cassandra 2.0+ supports protocol version 2
     * Apache Cassandra 2.1+ supports protocol version 3
     * Apache Cassandra 2.2+ supports protocol version 4
     *
     * NOTE: Apache Cassandra 3.x supports protocol version 3 and 4 only
     *
     * @param int $version The protocol version
     *
     * @return \Cassandra\Cluster\Builder self
     */
    public function withProtocolVersion(int $version): \Cassandra\Cluster\Builder
    {
    }

    /**
     * Total number of IO threads to use for handling the requests.
     *
     * Note: number of io threads * core connections per host <= total number
     *       of connections <= number of io threads * max connections per host
     *
     * @param int $count total number of threads.
     *
     * @return \Cassandra\Cluster\Builder self
     */
    public function withIOThreads(int $count): \Cassandra\Cluster\Builder
    {
    }

    /**
     * Set the size of connection pools used by the driver. Pools are fixed
     * when only `$core` is given, when a `$max` is specified as well,
     * additional connections will be created automatically based on current
     * load until the maximum number of connection has been reached. When
     * request load goes down, extra connections are automatically cleaned up
     * until only the core number of connections is left.
     *
     * @param int $core minimum connections to keep open to any given host
     * @param int $max maximum connections to keep open to any given host
     *
     * @return \Cassandra\Cluster\Builder self
     */
    public function withConnectionsPerHost(int $core, int $max = null): \Cassandra\Cluster\Builder
    {
    }

    /**
     * Specify interval in seconds that the driver should wait before attempting
     * to re-establish a closed connection.
     *
     * @param float $interval interval in seconds
     *
     * @return \Cassandra\Cluster\Builder self
     */
    public function withReconnectInterval(float $interval): \Cassandra\Cluster\Builder
    {
    }

    /**
     * Enables/disables latency-aware routing.
     *
     * @param bool $enabled whether to actually enable or disable the routing.
     *
     * @return \Cassandra\Cluster\Builder self
     */
    public function withLatencyAwareRouting(bool $enabled = null): \Cassandra\Cluster\Builder
    {
    }

    /**
     * Disables nagle algorithm for lower latency.
     *
     * @param bool $enabled whether to actually enable or disable nodelay.
     *
     * @return \Cassandra\Cluster\Builder self
     */
    public function withTCPNodelay(bool $enabled = null): \Cassandra\Cluster\Builder
    {
    }

    /**
     * Enables/disables TCP keepalive.
     *
     * @param float|null $delay The period of inactivity in seconds, after
     *                          which the keepalive probe should be sent over
     *                          the connection. If set to `null`, disables
     *                          keepalive probing.
     *
     * @return \Cassandra\Cluster\Builder self
     */
    public function withTCPKeepalive($delay): \Cassandra\Cluster\Builder
    {
    }

    /**
     * Configures the retry policy.
     *
     * @param \Cassandra\RetryPolicy $policy the retry policy to use.
     *
     * @return \Cassandra\Cluster\Builder self
     */
    public function withRetryPolicy(\Cassandra\RetryPolicy $policy): \Cassandra\Cluster\Builder
    {
    }

    /**
     * Sets the timestamp generator.
     *
     * @param \Cassandra\TimestampGenerator $generator A timestamp generator that will be used
     *                                                 to generate timestamps for statements.
     *
     * @return \Cassandra\Cluster\Builder self
     */
    public function withTimestampGenerator(\Cassandra\TimestampGenerator $generator): \Cassandra\Cluster\Builder
    {
    }

    /**
     * Enables/disables Schema Metadata.
     *
     * If disabled this allows the driver to skip over retrieving and
     * updating schema metadata, but it also disables the usage of token-aware
     * routing and $session->schema() will always return an empty object. This
     * can be useful for reducing the startup overhead of short-lived sessions.
     *
     * @param bool $enabled whether the driver fetches and maintains schema metadata.
     *
     * @return \Cassandra\Cluster\Builder self
     */
    public function withSchemaMetadata(bool $enabled = null): \Cassandra\Cluster\Builder
    {
    }

    /**
     * Enables/disables Hostname Resolution.
     *
     * If enabled the driver will resolve hostnames for IP addresses using
     * reverse IP lookup. This is useful for authentication (Kerberos) or
     * encryption SSL services that require a valid hostname for verification.
     *
     * Important: It's possible that the underlying C/C++ driver does not
     * support hostname resolution. A PHP warning will be emitted if the driver
     * does not support hostname resolution.
     *
     * @param bool $enabled whether the driver uses hostname resolution.
     *
     * @return \Cassandra\Cluster\Builder self
     */
    public function withHostnameResolution(bool $enabled = null): \Cassandra\Cluster\Builder
    {
    }

    /**
     * Enables/disables Randomized Contact Points.
     *
     * If enabled this allows the driver randomly use contact points in order
     * to evenly spread the load across the cluster and prevent
     * hotspots/load spikes during notifications (e.g. massive schema change).
     *
     * Note: This setting should only be disabled for debugging and testing.
     *
     * @param bool $enabled whether the driver uses randomized contact points.
     *
     * @return \Cassandra\Cluster\Builder self
     */
    public function withRandomizedContactPoints(bool $enabled = null): \Cassandra\Cluster\Builder
    {
    }

    /**
     * Specify interval in seconds that the driver should wait before attempting
     * to send heartbeat messages and control the amount of time the connection
     * must be idle before sending heartbeat messages. This is useful for
     * preventing intermediate network devices from dropping connections.
     *
     * @param float $interval interval in seconds (0 to disable heartbeat).
     *
     * @return \Cassandra\Cluster\Builder self
     */
    public function withConnectionHeartbeatInterval(float $interval): \Cassandra\Cluster\Builder
    {
    }
}
