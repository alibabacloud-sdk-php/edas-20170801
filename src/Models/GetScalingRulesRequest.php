<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class GetScalingRulesRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example 33e39be9-3e5f-*********
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the instance group to which the application is deployed.
     *
     * @example d8bb9d60-9**************
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The type of the scaling rule. You can leave this parameter empty. Valid values:
     *
     *   SCALE_IN: scale-in rules
     *   SCALE_OUT: scale-out rules
     *
     * @example SCALE_IN
     *
     * @var string
     */
    public $mode;
    protected $_name = [
        'appId'   => 'AppId',
        'groupId' => 'GroupId',
        'mode'    => 'Mode',
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
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetScalingRulesRequest
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
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        return $model;
    }
}
