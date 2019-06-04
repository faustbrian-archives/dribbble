<?php

declare(strict_types=1);

/*
 * This file is part of Dribbble PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\Dribbble\API;

use Plients\Http\HttpResponse;

class Buckets extends AbstractAPI
{
    /**
     * @param int $id
     *
     * @return \Plients\Http\HttpResponse
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
     * @return \Plients\Http\HttpResponse
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
     * @return \Plients\Http\HttpResponse
     */
    public function update(int $id, string $name, array $parameters = []): HttpResponse
    {
        return $this->client->put("buckets/{$id}", compact('name') + $parameters);
    }

    /**
     * @param int $id
     *
     * @return \Plients\Http\HttpResponse
     */
    public function delete(int $id): HttpResponse
    {
        return $this->client->delete("buckets/{$id}");
    }
}
