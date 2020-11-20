<?php

namespace Fellzo\NsiApiClient\ResponseModels;


use Carbon\Carbon;

class RefbookPassport extends ResponseModel
{
    private string $identifier;
    private string $oid;
    private string $version;
    private int    $rowsCount;
    private Carbon $createdDate;
    private Carbon $publishDate;
    private Carbon $lastUpdate;
    private Carbon $approveDate;
    private string $fullName;
    private string $shortName;
    private string $description;
    private string $structureNotes;
    private string $releaseNotes;
    private int    $respOrganizationId;
    private int    $authOrganizationId;
    private int    $typeId;
    private int    $groupId;
    private bool   $hierarchical;
    private bool   $archive;
    /** @var array|RefbookField[] */
    private array  $fields;
    /** @var array|RefbookKey[] */
    private array  $keys;
    /** @var array|RefbookCode[] */
    private array  $codes;

    protected static array $casts
        = [
            'rowsCount'          => 'int',
            'respOrganizationId' => 'int',
            'authOrganizationId' => 'int',
            'typeId'             => 'int',
            'groupId'            => 'int',
            'publishDate'        => 'datetime',
            'lastUpdate'         => 'datetime',
            'approveDate'        => 'datetime',
            'createdDate'        => 'datetime',
            'archive'            => 'bool',
            'hierarchical'       => 'bool',
            'fields'             => 'array[Fellzo\NsiApiClient\ResponseModels\RefbookField]',
            'keys'               => 'array[Fellzo\NsiApiClient\ResponseModels\RefbookKey]',
            'codes'              => 'array[Fellzo\NsiApiClient\ResponseModels\RefbookCode]',
        ];

    /**
     * @return string
     */
    public function getIdentifier() : string
    {
        return $this->identifier;
    }

    /**
     * @param string $identifier
     * @return RefbookPassport
     */
    public function setIdentifier(string $identifier) : RefbookPassport
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * @return string
     */
    public function getOid() : string
    {
        return $this->oid;
    }

    /**
     * @param string $oid
     * @return RefbookPassport
     */
    public function setOid(string $oid) : RefbookPassport
    {
        $this->oid = $oid;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersion() : string
    {
        return $this->version;
    }

    /**
     * @param string $version
     * @return RefbookPassport
     */
    public function setVersion(string $version) : RefbookPassport
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @return int
     */
    public function getRowsCount() : int
    {
        return $this->rowsCount;
    }

    /**
     * @param int $rowsCount
     * @return RefbookPassport
     */
    public function setRowsCount(int $rowsCount) : RefbookPassport
    {
        $this->rowsCount = $rowsCount;
        return $this;
    }

    /**
     * @return Carbon
     */
    public function getCreatedDate() : Carbon
    {
        return $this->createdDate;
    }

    /**
     * @param Carbon $createdDate
     * @return RefbookPassport
     */
    public function setCreatedDate(Carbon $createdDate) : RefbookPassport
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * @return Carbon
     */
    public function getPublishDate() : Carbon
    {
        return $this->publishDate;
    }

    /**
     * @param Carbon $publishDate
     * @return RefbookPassport
     */
    public function setPublishDate(Carbon $publishDate) : RefbookPassport
    {
        $this->publishDate = $publishDate;
        return $this;
    }

    /**
     * @return Carbon
     */
    public function getLastUpdate() : Carbon
    {
        return $this->lastUpdate;
    }

    /**
     * @param Carbon $lastUpdate
     * @return RefbookPassport
     */
    public function setLastUpdate(Carbon $lastUpdate) : RefbookPassport
    {
        $this->lastUpdate = $lastUpdate;
        return $this;
    }

    /**
     * @return Carbon
     */
    public function getApproveDate() : Carbon
    {
        return $this->approveDate;
    }

    /**
     * @param Carbon $approveDate
     * @return RefbookPassport
     */
    public function setApproveDate(Carbon $approveDate) : RefbookPassport
    {
        $this->approveDate = $approveDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getFullName() : string
    {
        return $this->fullName;
    }

    /**
     * @param string $fullName
     * @return RefbookPassport
     */
    public function setFullName(string $fullName) : RefbookPassport
    {
        $this->fullName = $fullName;
        return $this;
    }

    /**
     * @return string
     */
    public function getShortName() : string
    {
        return $this->shortName;
    }

    /**
     * @param string $shortName
     * @return RefbookPassport
     */
    public function setShortName(string $shortName) : RefbookPassport
    {
        $this->shortName = $shortName;
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
     * @return RefbookPassport
     */
    public function setDescription(string $description) : RefbookPassport
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getStructureNotes() : string
    {
        return $this->structureNotes;
    }

    /**
     * @param string $structureNotes
     * @return RefbookPassport
     */
    public function setStructureNotes(string $structureNotes) : RefbookPassport
    {
        $this->structureNotes = $structureNotes;
        return $this;
    }

    /**
     * @return string
     */
    public function getReleaseNotes() : string
    {
        return $this->releaseNotes;
    }

    /**
     * @param string $releaseNotes
     * @return RefbookPassport
     */
    public function setReleaseNotes(string $releaseNotes) : RefbookPassport
    {
        $this->releaseNotes = $releaseNotes;
        return $this;
    }

    /**
     * @return int
     */
    public function getRespOrganizationId() : int
    {
        return $this->respOrganizationId;
    }

    /**
     * @param int $respOrganizationId
     * @return RefbookPassport
     */
    public function setRespOrganizationId(int $respOrganizationId) : RefbookPassport
    {
        $this->respOrganizationId = $respOrganizationId;
        return $this;
    }

    /**
     * @return int
     */
    public function getAuthOrganizationId() : int
    {
        return $this->authOrganizationId;
    }

    /**
     * @param int $authOrganizationId
     * @return RefbookPassport
     */
    public function setAuthOrganizationId(int $authOrganizationId) : RefbookPassport
    {
        $this->authOrganizationId = $authOrganizationId;
        return $this;
    }

    /**
     * @return int
     */
    public function getTypeId() : int
    {
        return $this->typeId;
    }

    /**
     * @param int $typeId
     * @return RefbookPassport
     */
    public function setTypeId(int $typeId) : RefbookPassport
    {
        $this->typeId = $typeId;
        return $this;
    }

    /**
     * @return int
     */
    public function getGroupId() : int
    {
        return $this->groupId;
    }

    /**
     * @param int $groupId
     * @return RefbookPassport
     */
    public function setGroupId(int $groupId) : RefbookPassport
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return bool
     */
    public function isHierarchical() : bool
    {
        return $this->hierarchical;
    }

    /**
     * @param bool $hierarchical
     * @return RefbookPassport
     */
    public function setHierarchical(bool $hierarchical) : RefbookPassport
    {
        $this->hierarchical = $hierarchical;
        return $this;
    }

    /**
     * @return bool
     */
    public function isArchive() : bool
    {
        return $this->archive;
    }

    /**
     * @param bool $archive
     * @return RefbookPassport
     */
    public function setArchive(bool $archive) : RefbookPassport
    {
        $this->archive = $archive;
        return $this;
    }

    /**
     * @return array|RefbookField[]
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @param array|RefbookField[] $fields
     * @return RefbookPassport
     */
    public function setFields($fields)
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * @return array|RefbookKey[]
     */
    public function getKeys()
    {
        return $this->keys;
    }

    /**
     * @param array|RefbookKey[] $keys
     * @return RefbookPassport
     */
    public function setKeys($keys)
    {
        $this->keys = $keys;
        return $this;
    }

    /**
     * @return array|RefbookCode[]
     */
    public function getCodes()
    {
        return $this->codes;
    }

    /**
     * @param array|RefbookCode[] $codes
     * @return RefbookPassport
     */
    public function setCodes($codes)
    {
        $this->codes = $codes;
        return $this;
    }
}