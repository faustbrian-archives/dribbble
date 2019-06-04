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

class Followers extends AbstractAPI
{
    /**
     * @param int|string $user
     *
     * @return \Plients\Http\HttpResponse
     */
    public function followers($user): HttpResponse
    {
        return $this->client->get("users/{$user}/followers");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function authdFollowers(): HttpResponse
    {
        return $this->client->get('user/followers');
    }

    /**
     * @param int|string $user
     *
     * @return \Plients\Http\HttpResponse
     */
    public function following($user): HttpResponse
    {
        return $this->client->get("users/{$user}/following");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function authdFollowing(): HttpResponse
    {
        return $this->client->get('user/following');
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function shotsFollowing(): HttpResponse
    {
        return $this->client->get('user/following/shots');
    }

    /**
     * @param int|string $user
     *
     * @return bool
     */
    public function isFollowing($user): HttpResponse
    {
        return $this->client->get("user/following/$user");
    }

    /**
     * @param int|string $user
     * @param [type]     $target_user
     *
     * @return \Plients\Http\HttpResponse
     */
    public function haveRelationship($user, $target_user): HttpResponse
    {
        return $this->client->get("users/{$user}/following/$target_user");
    }

    /**
     * @param int|string $user
     *
     * @return \Plients\Http\HttpResponse
     */
    public function follow($user): HttpResponse
    {
        return $this->client->put("users/{$user}/follow");
    }

    /**
     * @param int|string $user
     *
     * @return \Plients\Http\HttpResponse
     */
    public function unfollow($user): HttpResponse
    {
        return $this->client->delete("users/{$user}/follow");
    }
}
