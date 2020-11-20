<?php declare(strict_types=1);

namespace Fellzo\NsiApiClient\Methods;


use Fellzo\NsiApiClient\ResponseModels\GetRefbookResponse;

class GetRefbookTypes extends AbstractMethod
{
    protected string $methodName      = 'refbook_types';
    protected string $requestType     = 'GET';
    protected string $url             = 'https://nsi.rosminzdrav.ru:443/port/rest/types';
    protected bool   $isTokenRequired = true;
    protected string $responseModel   = GetRefbookResponse::class;
}