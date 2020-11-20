<?php


namespace Fellzo\NsiApiClient\ResponseModels;


class CompareField
{
    use Fillable;

    protected static array $casts
        = [
            'field' => Field::class,
        ];

    private string $operation;
    private Field  $field;

    /**
     * @return string
     */
    public function getOperation() : string
    {
        return $this->operation;
    }

    /**
     * @param string $operation
     * @return CompareField
     */
    public function setOperation(string $operation) : CompareField
    {
        $this->operation = $operation;
        return $this;
    }

    /**
     * @return Field
     */
    public function getField() : Field
    {
        return $this->field;
    }

    /**
     * @param Field $field
     * @return CompareField
     */
    public function setField(Field $field) : CompareField
    {
        $this->field = $field;
        return $this;
    }
}