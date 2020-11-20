<?php


namespace Fellzo\NsiApiClient\ResponseModels;


class SystemRefbook
{
    use Fillable;

    private int    $id;
    private string $name;
    private int    $parentId;

    protected static array $casts
        = [
            'id'       => 'int',
            'parentId' => 'int'
        ];

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return SystemRefbook
     */
    public function setId(int $id) : SystemRefbook
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return SystemRefbook
     */
    public function setName(string $name) : SystemRefbook
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getParentId() : int
    {
        return $this->parentId;
    }

    /**
     * @param int $parentId
     * @return SystemRefbook
     */
    public function setParentId(int $parentId) : SystemRefbook
    {
        $this->parentId = $parentId;
        return $this;
    }
}