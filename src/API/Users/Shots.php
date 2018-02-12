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

namespace BrianFaust\Dribbble\API\Users;

use BrianFaust\Dribbble\API\AbstractAPI;
use BrianFaust\Http\HttpResponse;

class Shots extends AbstractAPI
{
    /**
     * @param int|string $user
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function lists($user): HttpResponse
    {
        return $this->client->get("users/{$user}/shots");
    }

    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function authd(): HttpResponse
    {
        return $this->client->get('user/shots');
    }
}
