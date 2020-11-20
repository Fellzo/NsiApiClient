<?php declare(strict_types=1);

namespace Fellzo\NsiApiClient\Methods;

use Fellzo\NsiApiClient\Exceptions\ResponseModelException;
use Fellzo\NsiApiClient\Methods\Exceptions\MissingRequiredParameterException;
use Fellzo\NsiApiClient\ResponseModels\ResponseModel;
use GuzzleHttp;

use Fellzo\NsiApiClient\Methods\Exceptions\MethodException;


abstract class AbstractMethod implements MethodInterface
{
    /**
     * @var $url string Method's url
     */
    protected string $url = 'url';
    /**
     * @var $methodName string Name for calling from Client class
     */
    protected string $methodName = 'abstract method';
    /**
     * @var $requestType string Request type POST/GET
     */
    protected string $requestType = 'GET';
    /**
     * @var $requiredParams array Required params
     */
    protected array $requiredParams = [];
    /**
     * @var $optionalParams array Optional params
     */
    protected array $optionalParams = [];
    /**
     * @var $apiToken string API token for NSI
     */
    protected string $apiToken = 'empty_token';
    /**
     * @var $isTokenRequired bool Token required flag
     */
    protected bool $isTokenRequired = true;
    /**
     * @var string Field name for passing token
     */
    protected string $tokenFieldName = 'userKey';
    /**
     * @var string Response model class (will be filled by response data)
     */
    protected string $responseModel  = '';

    /**
     * @return string
     */
    public function getMethodName() : string
    {
        return $this->methodName;
    }

    /**
     * @param string $apiToken
     */
    public function setApiToken(string $apiToken) : void
    {
        $this->apiToken = $apiToken;
    }


    private function checkParams(array $required, array $got) : bool
    {
        foreach ( $required as $key ) {
            if ( ! array_key_exists($key, $got) ) {
                return false;
            }
        }
        return true;
    }

    /**
     * @param GuzzleHttp\Client $client
     * @param array $params
     * @return array
     * @throws MethodException
     */
    protected function call(GuzzleHttp\Client $client, array $params) : array
    {
        try {
            // Выбираем только те парметры, которые есть в сигнатуре метода, остальные отбрасываются
            $requestParams = [];
            foreach ( $this->requiredParams as $param ) {
                $requestParams[$param] = $params[$param];
            }
            foreach ( $this->optionalParams as $param ) {
                if ( array_key_exists($param, $params) ) {
                    $requestParams[$param] = $params[$param];
                }
            }
            if ( $this->isTokenRequired ) {
                $requestParams[$this->tokenFieldName] = $this->apiToken;
            }
            $response = $client->request($this->requestType, $this->url, [
                $this->requestType === 'GET' ? 'query' : 'body' => $requestParams
            ]);
        } catch ( GuzzleHttp\Exception\GuzzleException $exception ) {
            if ( $exception->getCode() === 403 ) { // Authorization error
                throw new MethodException('Wrong api token');
            } else {
                echo $exception->getMessage();
            }
            die;
        }
        if ( $response->getStatusCode() !== 200 ) {
            throw new MethodException($response->getReasonPhrase());
        }
        $response = json_decode($response->getBody()->getContents(), true);
        return $response;
    }

    /**
     * Method for preparation response array before filling ResponseModel
     * @param array $response
     * @return array
     */
    protected function _prepareResponse(array $response)
    {
        return $response;
    }


    /**
     * @param GuzzleHttp\Client $client Guzzle client instance
     * @param array $params Request params
     * @param callable $callback Will be called after successful request (response will be passed as parameter)
     * @return ResponseModel
     * @throws MethodException
     * @throws ResponseModelException
     * @throws Exceptions\MissingRequiredParameterException
     */
    public function __invoke(GuzzleHttp\Client $client, array $params, callable $callback = null)
    {
        if ( ! $this->checkParams($this->requiredParams, $params) ) {
            throw new MissingRequiredParameterException();
        }
        $response = $this->_prepareResponse($this->call($client, $params));
        if ( ! $this->responseModel )
            throw new ResponseModelException();
        /** @var ResponseModel $model */
        $model = new $this->responseModel;
        $model->fill($response);
        if ( is_callable($callback) ) {
            $callback($response);
        }
        return $model;
    }
}