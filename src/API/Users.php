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

use Plients\Dribbble\Models\User;
use Plients\Http\HttpResponse;

class Users extends AbstractAPI
{
    /**
     * @param int|string $id
     *
     * @return \Plients\Http\HttpResponse
     */
    public function details($id): HttpResponse
    {
        return $this->client->get("users/{$id}");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function authd(): HttpResponse
    {
        return $this->client->get('user');
    }
}
