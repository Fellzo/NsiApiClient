<?php


namespace Fellzo\NsiApiClient\ResponseModels;


class Field
{
    use Fillable;

    protected static array $casts = [
        'number' => 'int',
        ''
    ];

    private string $name;
    private string $alias;
    private string $description;
    private string $dataType;
    private int $number;
    private bool $visible;
}