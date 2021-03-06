<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ListApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $logicalRegionId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $logicalRegionIdFilter;
    protected $_name = [
        'clusterId'             => 'ClusterId',
        'logicalRegionId'       => 'LogicalRegionId',
        'appName'               => 'AppName',
        'resourceGroupId'       => 'ResourceGroupId',
        'logicalRegionIdFilter' => 'LogicalRegionIdFilter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->logicalRegionId) {
            $res['LogicalRegionId'] = $this->logicalRegionId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->logicalRegionIdFilter) {
            $res['LogicalRegionIdFilter'] = $this->logicalRegionIdFilter;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['LogicalRegionId'])) {
            $model->logicalRegionId = $map['LogicalRegionId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['LogicalRegionIdFilter'])) {
            $model->logicalRegionIdFilter = $map['LogicalRegionIdFilter'];
        }

        return $model;
    }
}
