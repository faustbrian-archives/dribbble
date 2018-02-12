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

use BrianFaust\Dribbble\API\AbstractAPI;
use BrianFaust\Http\HttpResponse;

class Projects extends AbstractAPI
{
    /**
     * @param int $id
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function lists(int $id): HttpResponse
    {
        return $this->client->get("shots/{$id}/projects");
    }
}
