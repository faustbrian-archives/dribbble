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

class Attachments extends AbstractAPI
{
    /**
     * @param int $id
     *
     * @return \Plients\Http\HttpResponse
     */
    public function lists(int $id): HttpResponse
    {
        return $this->client->get("shots/{$id}/attachments");
    }

    /**
     * @param int    $shot
     * @param string $file
     *
     * @return \Plients\Http\HttpResponse
     */
    public function create(int $shot, string $file): HttpResponse
    {
        return $this->client->asMultipart()->post("shots/{$shot}/attachments", compact('file'));
    }

    /**
     * @param int $shot
     * @param int $id
     *
     * @return \Plients\Http\HttpResponse
     */
    public function details(int $shot, int $id): HttpResponse
    {
        return $this->client->get("shots/{$shot}/attachments/{$id}");
    }

    /**
     * @param int $shot
     * @param int $id
     *
     * @return \Plients\Http\HttpResponse
     */
    public function delete(int $shot, int $id): HttpResponse
    {
        return $this->client->delete("shots/{$shot}/attachments/{$id}");
    }
}
