<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListMethodsResponseBody\serviceMethodList;
use AlibabaCloud\Tea\Model;

class ListMethodsResponseBody extends Model
{
    /**
     * @description The HTTP status code that is returned.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The returned message that indicates whether the request is successful.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 69AD2AA7-DB47-449B-941B-B14409DF****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about service methods.
     *
     * @var serviceMethodList
     */
    public $serviceMethodList;
    protected $_name = [
        'code'              => 'Code',
        'message'           => 'Message',
        'requestId'         => 'RequestId',
        'serviceMethodList' => 'ServiceMethodList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serviceMethodList) {
            $res['ServiceMethodList'] = null !== $this->serviceMethodList ? $this->serviceMethodList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMethodsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceMethodList'])) {
            $model->serviceMethodList = serviceMethodList::fromMap($map['ServiceMethodList']);
        }

        return $model;
    }
}
