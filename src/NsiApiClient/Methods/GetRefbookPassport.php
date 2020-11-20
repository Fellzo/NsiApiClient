<?php declare(strict_types=1);

namespace Fellzo\NsiApiClient\Methods;


use Fellzo\NsiApiClient\ResponseModels\RefbookPassport;

/**
 * Class GetRefbookPassport
 * @package Fellzo\NsiApiClient\Methods
 * docs https://nsi.rosminzdrav.ru/port/#passport
 */
class GetRefbookPassport extends AbstractMethod
{
    protected string $methodName      = 'refbook_passport';
    protected string $requestType     = 'GET';
    protected string $url             = 'https://nsi.rosminzdrav.ru:443/port/rest/passport';
    protected array  $requiredParams  = ['identifier'];
    protected array  $optionalParams  = ['version'];
    protected bool   $isTokenRequired = true;
    protected string $responseModel   = RefbookPassport::class;
}