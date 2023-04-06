<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class SearchDriveRequest extends Model
{
    /**
     * @var string
     */
    public $driveName;

    /**
     * @example 100
     *
     * @var int
     */
    public $limit;

    /**
     * @example NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg
     *
     * @var string
     */
    public $marker;

    /**
     * @example c9b7a5aa04d14ae3867fdc886fa01da4
     *
     * @var string
     */
    public $owner;

    /**
     * @example user
     *
     * @var string
     */
    public $ownerType;
    protected $_name = [
        'driveName' => 'drive_name',
        'limit'     => 'limit',
        'marker'    => 'marker',
        'owner'     => 'owner',
        'ownerType' => 'owner_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->driveName) {
            $res['drive_name'] = $this->driveName;
        }
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }
        if (null !== $this->marker) {
            $res['marker'] = $this->marker;
        }
        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }
        if (null !== $this->ownerType) {
            $res['owner_type'] = $this->ownerType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchDriveRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['drive_name'])) {
            $model->driveName = $map['drive_name'];
        }
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }
        if (isset($map['marker'])) {
            $model->marker = $map['marker'];
        }
        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }
        if (isset($map['owner_type'])) {
            $model->ownerType = $map['owner_type'];
        }

        return $model;
    }
}
