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

use BrianFaust\Dribbble\Models\User;
use BrianFaust\Http\HttpResponse;

class Users extends AbstractAPI
{
    /**
     * @param int|string $id
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function details($id): HttpResponse
    {
        return $this->client->get("users/{$id}");
    }

    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function authd(): HttpResponse
    {
        return $this->client->get('user');
    }
}
