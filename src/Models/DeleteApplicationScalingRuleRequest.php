<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DeleteApplicationScalingRuleRequest extends Model
{
    /**
     * @description The ID of the application. You can call the ListApplication operation to query the application ID. For more information, see [ListApplication](~~149390~~).
     *
     * @example 78194c76-3dca-418e-a263-cccd1ab4****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the auto scaling policy.
     *
     * @example cpu-trigger
     *
     * @var string
     */
    public $scalingRuleName;
    protected $_name = [
        'appId'           => 'AppId',
        'scalingRuleName' => 'ScalingRuleName',
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
        if (null !== $this->scalingRuleName) {
            $res['ScalingRuleName'] = $this->scalingRuleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteApplicationScalingRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ScalingRuleName'])) {
            $model->scalingRuleName = $map['ScalingRuleName'];
        }

        return $model;
    }
}
