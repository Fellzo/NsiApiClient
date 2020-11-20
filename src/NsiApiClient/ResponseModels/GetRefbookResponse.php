<?php


namespace Fellzo\NsiApiClient\ResponseModels;


class GetRefbookResponse extends ResponseModel
{
    protected static array $casts
        = [
            'list' => 'array[Fellzo\NsiApiClient\ResponseModels\SystemRefbook]'
        ];

    /** @var array|SystemRefbook[] */
    private array $list = [];

    /**
     * @return array
     */
    public function getList() : array
    {
        return $this->list;
    }

    /**
     * @param array $list
     * @return GetRefbookResponse
     */
    public function setList(array $list) : GetRefbookResponse
    {
        $this->list = $list;
        return $this;
    }

    public function getRefbookById(int $id) : ?SystemRefbook
    {
        foreach ( $this->list as $refbook ) {
            if ( $refbook->getId() === $id )
                return $refbook;
        }
        return null;
    }
}