<?php

/*
 * This file is part of Dribbble PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Dribbble\API\Teams;

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
        return $this->client->get("teams/{$id}/shots");
    }
}