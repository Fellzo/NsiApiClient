<?php


namespace Fellzo\NsiApiClient\ResponseModels;


class CompareRefbookResponse extends ResponseModel
{
    protected static array $casts = [
        'fields' => 'array[Fellzo\NsiApiClient\ResponseModels\CompareField]'
    ];

    /**
     * @var array|CompareField[]
     */
    private array $fields;

    /**
     * @return array|CompareField[]
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @param array|CompareField[] $fields
     * @return CompareRefbookResponse
     */
    public function setFields($fields)
    {
        $this->fields = $fields;
        return $this;
    }
}