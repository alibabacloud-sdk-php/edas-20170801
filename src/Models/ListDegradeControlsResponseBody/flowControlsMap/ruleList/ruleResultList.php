<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListDegradeControlsResponseBody\flowControlsMap\ruleList;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListDegradeControlsResponseBody\flowControlsMap\ruleList\ruleResultList\rule;
use AlibabaCloud\Tea\Model;

class ruleResultList extends Model
{
    /**
     * @var rule[]
     */
    public $rule;
    protected $_name = [
        'rule' => 'Rule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rule) {
            $res['Rule'] = [];
            if (null !== $this->rule && \is_array($this->rule)) {
                $n = 0;
                foreach ($this->rule as $item) {
                    $res['Rule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleResultList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Rule'])) {
            if (!empty($map['Rule'])) {
                $model->rule = [];
                $n           = 0;
                foreach ($map['Rule'] as $item) {
                    $model->rule[$n++] = null !== $item ? rule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
