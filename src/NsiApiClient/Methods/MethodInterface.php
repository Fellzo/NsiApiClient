<?php


namespace Fellzo\NsiApiClient\Methods;


use GuzzleHttp\Client;

interface MethodInterface
{
    public function getMethodName(): string;
    public function setApiToken(string $apiToken);
    public function __invoke(Client $client, array $params, callable $callback = null);
}