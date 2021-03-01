<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListFlowControlsResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListFlowControlsResponseBody\flowControlsMap\appList;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListFlowControlsResponseBody\flowControlsMap\interfaceMethods;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListFlowControlsResponseBody\flowControlsMap\ruleList;
use AlibabaCloud\Tea\Model;

class flowControlsMap extends Model
{
    /**
     * @var appList
     */
    public $appList;

    /**
     * @var interfaceMethods
     */
    public $interfaceMethods;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var ruleList
     */
    public $ruleList;
    protected $_name = [
        'appList'          => 'AppList',
        'interfaceMethods' => 'InterfaceMethods',
        'appName'          => 'AppName',
        'appId'            => 'AppId',
        'ruleList'         => 'RuleList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appList) {
            $res['AppList'] = null !== $this->appList ? $this->appList->toMap() : null;
        }
        if (null !== $this->interfaceMethods) {
            $res['InterfaceMethods'] = null !== $this->interfaceMethods ? $this->interfaceMethods->toMap() : null;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->ruleList) {
            $res['RuleList'] = null !== $this->ruleList ? $this->ruleList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flowControlsMap
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppList'])) {
            $model->appList = appList::fromMap($map['AppList']);
        }
        if (isset($map['InterfaceMethods'])) {
            $model->interfaceMethods = interfaceMethods::fromMap($map['InterfaceMethods']);
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['RuleList'])) {
            $model->ruleList = ruleList::fromMap($map['RuleList']);
        }

        return $model;
    }
}
