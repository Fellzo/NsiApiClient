<?php declare(strict_types=1);

namespace Fellzo\NsiApiClient\Methods;

use Fellzo\NsiApiClient\ResponseModels\CompareRefbookResponse;

/**
 * Class CompareRefbookVersions
 * docs https://nsi.rosminzdrav.ru/port/#compare
 */
class CompareRefbookVersions extends AbstractMethod
{
    protected string $methodName      = 'compare_refbook';
    protected string $requestType     = 'GET';
    protected string $url             = 'https://nsi.rosminzdrav.ru:443/port/rest/compare';
    protected array  $requiredParams  = ['identifier', 'date1'];
    protected array  $optionalParams  = ['date2', 'page', 'size'];
    protected bool   $isTokenRequired = true;
    protected string $responseModel   = CompareRefbookResponse::class;
}