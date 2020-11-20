<?php declare(strict_types=1);

namespace Fellzo\NsiApiClient\Exceptions;


class MethodNotImplementedException extends \Exception
{
    public function __construct($message = 'Called method not implemented', $code = 0, \Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}