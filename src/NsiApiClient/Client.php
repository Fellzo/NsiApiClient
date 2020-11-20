<?php declare(strict_types=1);

namespace Fellzo\NsiApiClient;

use Exception;

use GuzzleHttp;

use Fellzo\NsiApiClient\Methods\{
    AbstractMethod,
    MethodInterface,
    GetRefbookTypes,
    SearchRefbook,
    CompareRefbookVersions,
    GetRefbookPassport,
    GetRefbookData,
};
use Fellzo\NsiApiClient\Exceptions\MethodNotImplementedException;
use Fellzo\NsiApiClient\ResponseModels\ResponseModel;

/**
 * Class Client API client for NSI rest-api
 * @package AppBundle\Service\Nsi\ApiClient
 */
class Client
{
    /**
     * Array of API methods class names
     * @var array
     */
    private array $registered
        = [
            GetRefbookPassport::class,
            GetRefbookData::class,
            GetRefbookTypes::class,
            SearchRefbook::class,
            CompareRefbookVersions::class,
        ];
    /**
     * @var $methods array Contains instances of all registered methods
     */
    private array $methods = [];
    /**
     * @var GuzzleHttp\Client
     */
    private ?GuzzleHttp\Client $client = null;
    private string             $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
        $this->client = new GuzzleHttp\Client();
        $this->loadMethods();
    }

    /**
     * Load all registered in $registered array methods
     * @return $this
     */
    private function loadMethods()
    {
        foreach ( $this->registered as $class ) {
            /**
             * @var $instance AbstractMethod
             */
            $instance = new $class;
            $instance->setApiToken($this->apiKey);
            $this->methods[$instance->getMethodName()] = $instance;
        }
        return $this;
    }

    /**
     * Add custom API method
     * @param string $methodClass Class must extends MethodInterface class
     * @throws Exception
     */
    public function registerMethod(string $methodClass)
    {
        $instance = new $methodClass;
        if ( ! $instance instanceof MethodInterface )
            throw new Exception();
        $instance->setApiToken($this->apiKey);
        $this->registered[]                        = $methodClass;
        $this->methods[$instance->getMethodName()] = $instance;
    }

    /**
     * Return list of available API methods
     * @return array
     */
    public function getAvailableMethodNames() : array
    {
        return array_keys($this->methods);
    }

    /**
     * Call registered API method and return ResponseModel (filled with response data)
     * @param string $methodName
     * @param array $params
     * @param callable|null $callback
     * @return ResponseModel
     * @throws MethodNotImplementedException
     */
    public function call(string $methodName, array $params = [], callable $callback = null)
    {
        if ( ! array_key_exists($methodName, $this->methods) ) {
            throw new MethodNotImplementedException;
        }
        return $this->methods[$methodName]($this->client, $params, $callback);
    }
}
