<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListAuthorityResponseBody\authorityList;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListAuthorityResponseBody\authorityList\authority\actionList;
use AlibabaCloud\Tea\Model;

class authority extends Model
{
    /**
     * @description The set of permissions.
     *
     * @var actionList
     */
    public $actionList;

    /**
     * @description The description of the permission group.
     *
     * @example Operations on applications
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the permission group.
     *
     * @example 1
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the permission group.
     *
     * @example Application management
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'actionList'  => 'ActionList',
        'description' => 'Description',
        'groupId'     => 'GroupId',
        'name'        => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionList) {
            $res['ActionList'] = null !== $this->actionList ? $this->actionList->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authority
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionList'])) {
            $model->actionList = actionList::fromMap($map['ActionList']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
