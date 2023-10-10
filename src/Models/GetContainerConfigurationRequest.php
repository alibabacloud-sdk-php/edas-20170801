<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class GetContainerConfigurationRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example 3616cdca-4f92-**************
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the instance group.
     *
     *   If this parameter is specified, this operation queries the Tomcat configuration of the instance group.
     *   If this parameter is not specified, this operation queries the Tomcat configuration of the application.
     *
     * @example 8123db90-880f-**************
     *
     * @var string
     */
    public $groupId;
    protected $_name = [
        'appId'   => 'AppId',
        'groupId' => 'GroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetContainerConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        return $model;
    }
}
