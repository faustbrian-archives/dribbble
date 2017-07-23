<?php

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
use BrianFaust\Dribbble\API\AbstractAPI;

class Comments extends AbstractAPI
{
    /**
     * @param int $shot
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function lists(int $shot): HttpResponse
    {
        return $this->client->get("shots/{$shot}/comments");
    }

    /**
     * @param int $shot
     * @param int $id
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function likes(int $shot, int $id): HttpResponse
    {
        return $this->client->get("shots/{$shot}/comments/{$id}/likes");
    }

    /**
     * @param int    $shot
     * @param string $body
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function create(int $shot, string $body): HttpResponse
    {
        return $this->client->post("shots/{$shot}/comments", compact('body'));
    }

    /**
     * @param int $shot
     * @param int $id
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function read(int $shot, int $id): HttpResponse
    {
        return $this->client->get("shots/{$shot}/comments/{$id}");
    }

    /**
     * @param int    $shot
     * @param int    $id
     * @param string $body
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function update(int $shot, int $id, string $body): HttpResponse
    {
        return $this->client->put("shots/{$shot}/comments/{$id}", compact('body'));
    }

    /**
     * @param int $shot
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function delete(int $shot): HttpResponse
    {
        return $this->client->delete("shots/{$shot}/comments/{$id}");
    }

    /**
     * @param int $shot
     * @param int $id
     *
     * @return bool
     */
    public function isLiked(int $shot, int $id): HttpResponse
    {
        return $this->client->get("shots/{$shot}/comments/{$id}/like");
    }

    /**
     * @param int $shot
     * @param int $id
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function like(int $shot, int $id): HttpResponse
    {
        return $this->client->post("shots/{$shot}/comments/{$id}/like");
    }

    /**
     * @param int $shot
     * @param int $id
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function unlike(int $shot, int $id): HttpResponse
    {
        return $this->client->delete("shots/{$shot}/comments/{$id}/like");
    }
}
