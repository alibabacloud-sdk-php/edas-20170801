<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetAccountMockRuleResponseBody\data;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetAccountMockRuleResponseBody\data\result\dubboMockItems;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetAccountMockRuleResponseBody\data\result\scMockItems;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var dubboMockItems[]
     */
    public $dubboMockItems;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $consumerAppName;

    /**
     * @var string
     */
    public $consumerAppId;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $region;

    /**
     * @var scMockItems[]
     */
    public $scMockItems;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $providerAppId;

    /**
     * @var string
     */
    public $providerAppName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $enable;
    protected $_name = [
        'dubboMockItems'  => 'DubboMockItems',
        'status'          => 'Status',
        'consumerAppName' => 'ConsumerAppName',
        'consumerAppId'   => 'ConsumerAppId',
        'gmtModified'     => 'GmtModified',
        'region'          => 'Region',
        'scMockItems'     => 'ScMockItems',
        'gmtCreate'       => 'GmtCreate',
        'providerAppId'   => 'ProviderAppId',
        'providerAppName' => 'ProviderAppName',
        'name'            => 'Name',
        'id'              => 'Id',
        'enable'          => 'Enable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dubboMockItems) {
            $res['DubboMockItems'] = [];
            if (null !== $this->dubboMockItems && \is_array($this->dubboMockItems)) {
                $n = 0;
                foreach ($this->dubboMockItems as $item) {
                    $res['DubboMockItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->consumerAppName) {
            $res['ConsumerAppName'] = $this->consumerAppName;
        }
        if (null !== $this->consumerAppId) {
            $res['ConsumerAppId'] = $this->consumerAppId;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->scMockItems) {
            $res['ScMockItems'] = [];
            if (null !== $this->scMockItems && \is_array($this->scMockItems)) {
                $n = 0;
                foreach ($this->scMockItems as $item) {
                    $res['ScMockItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->providerAppId) {
            $res['ProviderAppId'] = $this->providerAppId;
        }
        if (null !== $this->providerAppName) {
            $res['ProviderAppName'] = $this->providerAppName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DubboMockItems'])) {
            if (!empty($map['DubboMockItems'])) {
                $model->dubboMockItems = [];
                $n                     = 0;
                foreach ($map['DubboMockItems'] as $item) {
                    $model->dubboMockItems[$n++] = null !== $item ? dubboMockItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ConsumerAppName'])) {
            $model->consumerAppName = $map['ConsumerAppName'];
        }
        if (isset($map['ConsumerAppId'])) {
            $model->consumerAppId = $map['ConsumerAppId'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ScMockItems'])) {
            if (!empty($map['ScMockItems'])) {
                $model->scMockItems = [];
                $n                  = 0;
                foreach ($map['ScMockItems'] as $item) {
                    $model->scMockItems[$n++] = null !== $item ? scMockItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['ProviderAppId'])) {
            $model->providerAppId = $map['ProviderAppId'];
        }
        if (isset($map['ProviderAppName'])) {
            $model->providerAppName = $map['ProviderAppName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        return $model;
    }
}
