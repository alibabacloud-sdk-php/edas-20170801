<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetJvmConfigurationResponseBody\jvmConfiguration;
use AlibabaCloud\Tea\Model;

class GetJvmConfigurationResponseBody extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var jvmConfiguration
     */
    public $jvmConfiguration;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'             => 'Code',
        'jvmConfiguration' => 'JvmConfiguration',
        'message'          => 'Message',
        'requestId'        => 'RequestId',
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
        if (null !== $this->jvmConfiguration) {
            $res['JvmConfiguration'] = null !== $this->jvmConfiguration ? $this->jvmConfiguration->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetJvmConfigurationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['JvmConfiguration'])) {
            $model->jvmConfiguration = jvmConfiguration::fromMap($map['JvmConfiguration']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
