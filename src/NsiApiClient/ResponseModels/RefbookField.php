<?php declare(strict_types=1);


namespace Fellzo\NsiApiClient\ResponseModels;


class RefbookField
{
    use Fillable;

    private string $field;
    private string $dataType;
    private string $alias;
    private string $description;

    /**
     * @return string
     */
    public function getField() : string
    {
        return $this->field;
    }

    /**
     * @param string $field
     * @return RefbookField
     */
    public function setField(string $field) : RefbookField
    {
        $this->field = $field;
        return $this;
    }

    /**
     * @return string
     */
    public function getDataType() : string
    {
        return $this->dataType;
    }

    /**
     * @param string $dataType
     * @return RefbookField
     */
    public function setDataType(string $dataType) : RefbookField
    {
        $this->dataType = $dataType;
        return $this;
    }

    /**
     * @return string
     */
    public function getAlias() : string
    {
        return $this->alias;
    }

    /**
     * @param string $alias
     * @return RefbookField
     */
    public function setAlias(string $alias) : RefbookField
    {
        $this->alias = $alias;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return RefbookField
     */
    public function setDescription(string $description) : RefbookField
    {
        $this->description = $description;
        return $this;
    }
}