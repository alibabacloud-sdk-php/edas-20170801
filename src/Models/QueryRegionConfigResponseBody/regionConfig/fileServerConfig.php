<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\QueryRegionConfigResponseBody\regionConfig;

use AlibabaCloud\Tea\Model;

class fileServerConfig extends Model
{
    /**
     * @description The Object Storage Service (OSS) bucket of the file server.
     *
     * @example edas-bj
     *
     * @var string
     */
    public $bucket;

    /**
     * @description The internal endpoint of the file server.
     *
     * @example oss-cn-beijing-****.aliyuncs.com
     *
     * @var string
     */
    public $internalUrl;

    /**
     * @description The public endpoint of the file server.
     *
     * @example oss-cn-beijing.aliyuncs.com
     *
     * @var string
     */
    public $publicUrl;

    /**
     * @description The virtual private cloud (VPC) endpoint of the file server.
     *
     * @example v*****-oss-cn-beijing.aliyuncs.com
     *
     * @var string
     */
    public $vpcUrl;
    protected $_name = [
        'bucket'      => 'Bucket',
        'internalUrl' => 'InternalUrl',
        'publicUrl'   => 'PublicUrl',
        'vpcUrl'      => 'VpcUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->internalUrl) {
            $res['InternalUrl'] = $this->internalUrl;
        }
        if (null !== $this->publicUrl) {
            $res['PublicUrl'] = $this->publicUrl;
        }
        if (null !== $this->vpcUrl) {
            $res['VpcUrl'] = $this->vpcUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileServerConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['InternalUrl'])) {
            $model->internalUrl = $map['InternalUrl'];
        }
        if (isset($map['PublicUrl'])) {
            $model->publicUrl = $map['PublicUrl'];
        }
        if (isset($map['VpcUrl'])) {
            $model->vpcUrl = $map['VpcUrl'];
        }

        return $model;
    }
}
