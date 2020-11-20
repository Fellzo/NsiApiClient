<?php


namespace Fellzo\NsiApiClient\ResponseModels;


class RefbookCode
{
    use Fillable;

    private string $value;
    private string $type;

    /**
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return RefbookCode
     */
    public function setValue(string $value) : RefbookCode
    {
        $this->value = $value;
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
     * @return RefbookCode
     */
    public function setType(string $type) : RefbookCode
    {
        $this->type = $type;
        return $this;
    }
}