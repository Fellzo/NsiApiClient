<?php declare(strict_types=1);

namespace Fellzo\NsiApiClient\Methods;

/**
 * Class GetRefbookData
 * docs https://nsi.rosminzdrav.ru/port/#data
 */
class GetRefbookData extends AbstractMethod
{
    protected string $methodName      = 'refbook_data';
    protected string $requestType     = 'GET';
    protected string $url             = 'https://nsi.rosminzdrav.ru:443/port/rest/data';
    protected array  $requiredParams  = ['identifier'];
    protected array  $optionalParams  = ['version', 'page', 'size', 'columns'];
    protected bool   $isTokenRequired = true;
}