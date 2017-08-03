<?php

declare(strict_types=1);

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

class Shots extends AbstractAPI
{
    /**
     * @param int $id
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function lists(int $id): HttpResponse
    {
        return $this->client->get('shots');
    }

    /**
     * @param int $id
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function details(int $id): HttpResponse
    {
        return $this->client->get("shots/{$id}");
    }

    /**
     * @param int    $id
     * @param string $title
     * @param string $image
     * @param array  $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function create(int $id, string $title, string $image, array $parameters = []): HttpResponse
    {
        return $this->client->asMultipart()->post('shots', compact('title', 'image') + $parameters);
    }

    /**
     * @param int   $id
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function update(int $id): HttpResponse
    {
        return $this->client->put("shots/{$id}", $parameters);
    }

    /**
     * @param int $id
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function delete(int $id): HttpResponse
    {
        return $this->client->delete("shots/{$id}");
    }
}
