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
 * A PHP representation of a materialized view
 */
abstract class MaterializedView implements Table
{
    /**
     * Returns the base table of the view
     *
     * @return \Cassandra\Table Base table of the view
     */
    public abstract function baseTable(): \Cassandra\Table;

    /**
     * Returns the name of this view
     *
     * @return string Name of the view
     */
    public abstract function name(): string;

    /**
     * Return a view's option by name
     *
     * @param string $name The name of the option
     *
     * @return \Cassandra\Value Value of an option by name
     */
    public abstract function option(string $name): \Cassandra\Value;

    /**
     * Returns all the view's options
     *
     * @return array A dictionary of string and Value pairs of the
     *               view's options.
     */
    public abstract function options(): array;

    /**
     * Description of the view, if any
     *
     * @return string View description or null
     */
    public abstract function comment(): string;

    /**
     * Returns read repair chance
     *
     * @return float Read repair chance
     */
    public abstract function readRepairChance(): float;

    /**
     * Returns local read repair chance
     *
     * @return float Local read repair chance
     */
    public abstract function localReadRepairChance(): float;

    /**
     * Returns GC grace seconds
     *
     * @return int GC grace seconds
     */
    public abstract function gcGraceSeconds(): int;

    /**
     * Returns caching options
     *
     * @return string Caching options
     */
    public abstract function caching(): string;

    /**
     * Returns bloom filter FP chance
     *
     * @return float Bloom filter FP chance
     */
    public abstract function bloomFilterFPChance(): float;

    /**
     * Returns memtable flush period in milliseconds
     *
     * @return int Memtable flush period in milliseconds
     */
    public abstract function memtableFlushPeriodMs(): int;

    /**
     * Returns default TTL.
     *
     * @return int Default TTL.
     */
    public abstract function defaultTTL(): int;

    /**
     * Returns speculative retry.
     *
     * @return string Speculative retry.
     */
    public abstract function speculativeRetry(): string;

    /**
     * Returns index interval
     *
     * @return int Index interval
     */
    public abstract function indexInterval(): int;

    /**
     * Returns compaction strategy class name
     *
     * @return string Compaction strategy class name
     */
    public abstract function compactionStrategyClassName(): string;

    /**
     * Returns compaction strategy options
     *
     * @return \Cassandra\Map Compaction strategy options
     */
    public abstract function compactionStrategyOptions(): \Cassandra\Map;

    /**
     * Returns compression parameters
     *
     * @return \Cassandra\Map Compression parameters
     */
    public abstract function compressionParameters(): \Cassandra\Map;

    /**
     * Returns whether or not the `populate_io_cache_on_flush` is true
     *
     * @return bool Value of `populate_io_cache_on_flush` or null
     */
    public abstract function populateIOCacheOnFlush(): bool;

    /**
     * Returns whether or not the `replicate_on_write` is true
     *
     * @return bool Value of `replicate_on_write` or null
     */
    public abstract function replicateOnWrite(): bool;

    /**
     * Returns the value of `max_index_interval`
     *
     * @return int Value of `max_index_interval` or null
     */
    public abstract function maxIndexInterval(): int;

    /**
     * Returns the value of `min_index_interval`
     *
     * @return int Value of `min_index_interval` or null
     */
    public abstract function minIndexInterval(): int;

    /**
     * Returns column by name
     *
     * @param string $name Name of the column
     *
     * @return \Cassandra\Column Column instance
     */
    public abstract function column(string $name): \Cassandra\Column;

    /**
     * Returns all columns in this view
     *
     * @return array A list of `Column` instances
     */
    public abstract function columns(): array;

    /**
     * Returns the partition key columns of the view
     *
     * @return array A list of of `Column` instances
     */
    public abstract function partitionKey(): array;

    /**
     * Returns both the partition and clustering key columns of the view
     *
     * @return array A list of of `Column` instances
     */
    public abstract function primaryKey(): array;

    /**
     * Returns the clustering key columns of the view
     *
     * @return array A list of of `Column` instances
     */
    public abstract function clusteringKey(): array;

    /**
     * @return array A list of cluster column orders ('asc' and 'desc')
     */
    public abstract function clusteringOrder(): array;
}
