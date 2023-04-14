<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class GetDomainRequest extends Model
{
    /**
     * @description domain id
     *
     * @example bj1
     *
     * @var string
     */
    public $domainId;

    /**
     * @example true
     *
     * @var bool
     */
    public $getQuotaUsed;
    protected $_name = [
        'domainId'     => 'domain_id',
        'getQuotaUsed' => 'get_quota_used',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainId) {
            $res['domain_id'] = $this->domainId;
        }
        if (null !== $this->getQuotaUsed) {
            $res['get_quota_used'] = $this->getQuotaUsed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['domain_id'])) {
            $model->domainId = $map['domain_id'];
        }
        if (isset($map['get_quota_used'])) {
            $model->getQuotaUsed = $map['get_quota_used'];
        }

        return $model;
    }
}