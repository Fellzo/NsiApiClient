<?php

namespace Fellzo\NsiApiClient\ResponseModels;

class Field
{
    use Fillable;

    protected static array $casts = [
        'number'  => 'int',
        'visible' => true
    ];

    private string $name;
    private string $alias;
    private string $description;
    private string $dataType;
    private int    $number;
    private bool   $visible;

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Field
     */
    public function setName(string $name) : Field
    {
        $this->name = $name;
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
     * @return Field
     */
    public function setAlias(string $alias) : Field
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
     * @return Field
     */
    public function setDescription(string $description) : Field
    {
        $this->description = $description;
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
     * @return Field
     */
    public function setDataType(string $dataType) : Field
    {
        $this->dataType = $dataType;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumber() : int
    {
        return $this->number;
    }

    /**
     * @param int $number
     * @return Field
     */
    public function setNumber(int $number) : Field
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return bool
     */
    public function isVisible() : bool
    {
        return $this->visible;
    }

    /**
     * @param bool $visible
     * @return Field
     */
    public function setVisible(bool $visible) : Field
    {
        $this->visible = $visible;
        return $this;
    }
}