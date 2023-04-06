<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class GetDefaultDriveRequest extends Model
{
    /**
     * @example c9b7a5aa04d14ae3867fdc886fa01da4
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'userId' => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDefaultDriveRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
