<?php declare(strict_types=1);

namespace Fellzo\NsiApiClient\Methods\Exceptions;


class MissingRequiredParameterException extends \Exception
{
    public function __construct($message = 'Missing required argument for called method', $code = 0, \Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }

}