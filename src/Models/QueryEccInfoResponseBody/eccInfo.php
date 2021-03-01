<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\QueryEccInfoResponseBody;

use AlibabaCloud\Tea\Model;

class eccInfo extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $eccId;

    /**
     * @var string
     */
    public $ecuId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $packageMd5;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $packageVersion;
    protected $_name = [
        'vpcId'          => 'VpcId',
        'eccId'          => 'EccId',
        'ecuId'          => 'EcuId',
        'groupId'        => 'GroupId',
        'groupName'      => 'GroupName',
        'packageMd5'     => 'PackageMd5',
        'appId'          => 'AppId',
        'packageVersion' => 'PackageVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->eccId) {
            $res['EccId'] = $this->eccId;
        }
        if (null !== $this->ecuId) {
            $res['EcuId'] = $this->ecuId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->packageMd5) {
            $res['PackageMd5'] = $this->packageMd5;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->packageVersion) {
            $res['PackageVersion'] = $this->packageVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eccInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['EccId'])) {
            $model->eccId = $map['EccId'];
        }
        if (isset($map['EcuId'])) {
            $model->ecuId = $map['EcuId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['PackageMd5'])) {
            $model->packageMd5 = $map['PackageMd5'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['PackageVersion'])) {
            $model->packageVersion = $map['PackageVersion'];
        }

        return $model;
    }
}
