<?php

declare(strict_types=1);
/**
 * A PSR-7 compliant http request handler.
 *
 * @license <https://github.com/Auvipev/Royal/master/LICENSE>.
 *
 * @link    <https://github.com/Auvipev/Royal>.
 */

namespace Auvipev\Royal;

use Exception;

/**
 * @class      AccessDeniedException.
 * @extends    Exception.
 * @implements ExceptionInterface.
 */
class AccessDeniedException extends Exception implements ExceptionInterface
{
}
