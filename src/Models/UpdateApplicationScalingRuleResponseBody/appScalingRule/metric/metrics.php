<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\UpdateApplicationScalingRuleResponseBody\appScalingRule\metric;

use AlibabaCloud\Tea\Model;

class metrics extends Model
{
    /**
     * @description This parameter is deprecated.
     *
     * @example 1
     *
     * @var int
     */
    public $metricTargetAverageUtilization;

    /**
     * @description This parameter is deprecated.
     *
     * @example cpu
     *
     * @var string
     */
    public $metricType;
    protected $_name = [
        'metricTargetAverageUtilization' => 'MetricTargetAverageUtilization',
        'metricType'                     => 'MetricType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricTargetAverageUtilization) {
            $res['MetricTargetAverageUtilization'] = $this->metricTargetAverageUtilization;
        }
        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetricTargetAverageUtilization'])) {
            $model->metricTargetAverageUtilization = $map['MetricTargetAverageUtilization'];
        }
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }

        return $model;
    }
}
