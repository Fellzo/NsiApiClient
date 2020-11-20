<?php


namespace Fellzo\NsiApiClient\ResponseModels;


class CompareField
{
    use Fillable;

    protected static array $casts = [];

    private string $operation;
}