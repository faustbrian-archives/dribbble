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

namespace Plients\Dribbble\API\Users;

use Plients\Dribbble\API\AbstractAPI;
use Plients\Http\HttpResponse;

class Likes extends AbstractAPI
{
    /**
     * @param int|string $user
     *
     * @return \Plients\Http\HttpResponse
     */
    public function lists($user): HttpResponse
    {
        return $this->client->get("users/{$user}/likes");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function authd(): HttpResponse
    {
        return $this->client->get('user/likes');
    }
}
