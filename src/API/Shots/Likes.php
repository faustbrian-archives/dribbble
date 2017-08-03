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

namespace BrianFaust\Dribbble\API\Shots;

use BrianFaust\Http\HttpResponse;
use BrianFaust\Dribbble\Models\Like;
use BrianFaust\Dribbble\API\AbstractAPI;

class Likes extends AbstractAPI
{
    /**
     * @param int $id
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function lists(int $id): HttpResponse
    {
        return $this->client->get("shots/{$id}/likes");
    }

    /**
     * @param int $id
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function isLiked(int $id): HttpResponse
    {
        return $this->client->get("shots/{$id}/like");
    }

    /**
     * @param int $id
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function like(int $id): HttpResponse
    {
        return $this->client->post("shots/{$id}/like");
    }

    /**
     * @param int $id
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function unlike(int $id): HttpResponse
    {
        return $this->client->delete("shots/{$id}/like");
    }
}
