<?php declare(strict_types=1);


namespace Fellzo\NsiApiClient\ResponseModels;


class RefbookKey
{
    use Fillable;

    private string $field;
    private string $type;

    /**
     * @return string
     */
    public function getField() : string
    {
        return $this->field;
    }

    /**
     * @param string $field
     * @return RefbookKey
     */
    public function setField(string $field) : RefbookKey
    {
        $this->field = $field;
        return $this;
    }

    /**
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return RefbookKey
     */
    public function setType(string $type) : RefbookKey
    {
        $this->type = $type;
        return $this;
    }
}