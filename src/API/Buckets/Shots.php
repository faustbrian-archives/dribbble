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

namespace BrianFaust\Dribbble\API\Buckets;

use BrianFaust\Dribbble\API\AbstractAPI;
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
        return $this->client->get("buckets/{$id}/shots");
    }

    /**
     * @param int $id
     * @param int $shot_id
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function create(int $id, int $shot_id): HttpResponse
    {
        return $this->client->post("buckets/{$id}/shots", compact('shot_id'));
    }

    /**
     * @param int $id
     * @param int $shot_id
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function delete(int $id, int $shot_id): HttpResponse
    {
        return $this->client->delete("buckets/{$id}/shots", compact('shot_id'));
    }
}
