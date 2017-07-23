<?php

/*
 * This file is part of Dribbble PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Dribbble\API\Users;

use BrianFaust\Http\HttpResponse;
use BrianFaust\Dribbble\API\AbstractAPI;

class Buckets extends AbstractAPI
{
    /**
     * @param int|string $user
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function lists($user): HttpResponse
    {
        return $this->client->get("users/{$user}/buckets");
    }

    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function authd(): HttpResponse
    {
        return $this->client->get('user/buckets');
    }
}
