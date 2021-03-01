<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListUserDefineRegionResponseBody\userDefineRegionList;
use AlibabaCloud\Tea\Model;

class ListUserDefineRegionResponseBody extends Model
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
     * @var userDefineRegionList
     */
    public $userDefineRegionList;

    /**
     * @var int
     */
    public $code;
    protected $_name = [
        'message'              => 'Message',
        'requestId'            => 'RequestId',
        'userDefineRegionList' => 'UserDefineRegionList',
        'code'                 => 'Code',
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
        if (null !== $this->userDefineRegionList) {
            $res['UserDefineRegionList'] = null !== $this->userDefineRegionList ? $this->userDefineRegionList->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserDefineRegionResponseBody
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
        if (isset($map['UserDefineRegionList'])) {
            $model->userDefineRegionList = userDefineRegionList::fromMap($map['UserDefineRegionList']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
