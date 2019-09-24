<?php

declare(strict_types=1);

namespace Adgoal\GuzzleRewindMiddleware;

use GuzzleHttp\Middleware;
use Psr\Http\Message\ResponseInterface;

/**
 * Class GuzzleRewindMiddleware.
 */
class GuzzleRewindMiddleware
{
    /**
     * @return callable returns a function that accepts the next handler
     */
    public static function rewind(): callable
    {
        return Middleware::mapResponse(
            static function (ResponseInterface $response) {
                $response->getBody()->rewind();

                return $response;
            }
        );
    }
}
