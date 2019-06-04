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

namespace Plients\Dribbble\API\Shots;

use Plients\Dribbble\API\AbstractAPI;
use Plients\Dribbble\Models\Like;
use Plients\Http\HttpResponse;

class Likes extends AbstractAPI
{
    /**
     * @param int $id
     *
     * @return \Plients\Http\HttpResponse
     */
    public function lists(int $id): HttpResponse
    {
        return $this->client->get("shots/{$id}/likes");
    }

    /**
     * @param int $id
     *
     * @return \Plients\Http\HttpResponse
     */
    public function isLiked(int $id): HttpResponse
    {
        return $this->client->get("shots/{$id}/like");
    }

    /**
     * @param int $id
     *
     * @return \Plients\Http\HttpResponse
     */
    public function like(int $id): HttpResponse
    {
        return $this->client->post("shots/{$id}/like");
    }

    /**
     * @param int $id
     *
     * @return \Plients\Http\HttpResponse
     */
    public function unlike(int $id): HttpResponse
    {
        return $this->client->delete("shots/{$id}/like");
    }
}
