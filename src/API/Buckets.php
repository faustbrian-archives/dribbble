<?php

/*
 * This file is part of Dribbble PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Dribbble\API;

use BrianFaust\Http\HttpResponse;

class Buckets extends AbstractAPI
{
    /**
     * @param int $id
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function details(int $id): HttpResponse
    {
        return $this->client->get("buckets/{$id}");
    }

    /**
     * @param int    $id
     * @param string $name
     * @param array  $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function create(int $id, string $name, array $parameters = []): HttpResponse
    {
        return $this->client->post('buckets', compact('name') + $parameters);
    }

    /**
     * @param int    $id
     * @param string $name
     * @param array  $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function update(int $id, string $name, array $parameters = []): HttpResponse
    {
        return $this->client->put("buckets/{$id}", compact('name') + $parameters);
    }

    /**
     * @param int $id
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function delete(int $id): HttpResponse
    {
        return $this->client->delete("buckets/{$id}");
    }
}