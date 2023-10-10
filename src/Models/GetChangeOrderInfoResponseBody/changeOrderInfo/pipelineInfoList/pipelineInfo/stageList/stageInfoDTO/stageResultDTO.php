<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageList\stageInfoDTO;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageList\stageInfoDTO\stageResultDTO\instanceDTOList;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageList\stageInfoDTO\stageResultDTO\serviceStage;
use AlibabaCloud\Tea\Model;

class stageResultDTO extends Model
{
    /**
     * @description The results of the task executed on each Elastic Compute Service (ECS) instance in each stage.
     *
     * @var instanceDTOList
     */
    public $instanceDTOList;

    /**
     * @description The results of tasks executed in each service-oriented stage.
     *
     * @var serviceStage
     */
    public $serviceStage;
    protected $_name = [
        'instanceDTOList' => 'InstanceDTOList',
        'serviceStage'    => 'ServiceStage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceDTOList) {
            $res['InstanceDTOList'] = null !== $this->instanceDTOList ? $this->instanceDTOList->toMap() : null;
        }
        if (null !== $this->serviceStage) {
            $res['ServiceStage'] = null !== $this->serviceStage ? $this->serviceStage->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stageResultDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceDTOList'])) {
            $model->instanceDTOList = instanceDTOList::fromMap($map['InstanceDTOList']);
        }
        if (isset($map['ServiceStage'])) {
            $model->serviceStage = serviceStage::fromMap($map['ServiceStage']);
        }

        return $model;
    }
}
