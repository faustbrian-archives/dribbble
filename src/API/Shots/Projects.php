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
use Plients\Http\HttpResponse;

class Projects extends AbstractAPI
{
    /**
     * @param int $id
     *
     * @return \Plients\Http\HttpResponse
     */
    public function lists(int $id): HttpResponse
    {
        return $this->client->get("shots/{$id}/projects");
    }
}
