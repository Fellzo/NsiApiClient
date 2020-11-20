<?php


namespace Fellzo\NsiApiClient\Exceptions;


use Throwable;

class ResponseModelException extends \Exception
{
    public function __construct()
    {
        parent::__construct('Response model not set of invalid');
    }
}