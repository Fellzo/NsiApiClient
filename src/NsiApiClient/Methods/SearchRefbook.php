<?php declare(strict_types=1);

namespace Fellzo\NsiApiClient\Methods;

/**
 * Class SearchRefbook
 * docs https://nsi.rosminzdrav.ru/port/#searchDictionary
 * @package AppBundle\Service\Nsi\ApiClient\Methods
 */
class SearchRefbook extends AbstractMethod
{
    protected string $methodName      = 'search_refbook';
    protected string $requestType     = 'GET';
    protected string $url             = 'https://nsi.rosminzdrav.ru:443/port/rest/searchDictionary';
    protected array  $requiredParams  = [];
    protected array  $optionalParams
                                      = [
            'identifier', 'page', 'size', 'sorting', 'sortingDirection', 'showArchive',
            'publishDateFrom', 'publishDateTo', 'name', 'description', 'law', 'respOrganizationId', 'typeId', 'groupId',
        ];
    protected bool   $isTokenRequired = true;
}