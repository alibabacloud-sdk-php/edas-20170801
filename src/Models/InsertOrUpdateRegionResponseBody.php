<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\InsertOrUpdateRegionResponseBody\userDefineRegionEntity;
use AlibabaCloud\Tea\Model;

class InsertOrUpdateRegionResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var userDefineRegionEntity
     */
    public $userDefineRegionEntity;

    /**
     * @var int
     */
    public $code;
    protected $_name = [
        'message'                => 'Message',
        'requestId'              => 'RequestId',
        'userDefineRegionEntity' => 'UserDefineRegionEntity',
        'code'                   => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->userDefineRegionEntity) {
            $res['UserDefineRegionEntity'] = null !== $this->userDefineRegionEntity ? $this->userDefineRegionEntity->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertOrUpdateRegionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserDefineRegionEntity'])) {
            $model->userDefineRegionEntity = userDefineRegionEntity::fromMap($map['UserDefineRegionEntity']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
