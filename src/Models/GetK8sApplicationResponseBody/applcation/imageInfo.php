<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation;

use AlibabaCloud\Tea\Model;

class imageInfo extends Model
{
    /**
     * @var string
     */
    public $repoId;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $repoOriginType;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $repoName;

    /**
     * @var string
     */
    public $repoNamespace;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'repoId'         => 'RepoId',
        'imageUrl'       => 'ImageUrl',
        'repoOriginType' => 'RepoOriginType',
        'tag'            => 'Tag',
        'repoName'       => 'RepoName',
        'repoNamespace'  => 'RepoNamespace',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->repoOriginType) {
            $res['RepoOriginType'] = $this->repoOriginType;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }
        if (null !== $this->repoNamespace) {
            $res['RepoNamespace'] = $this->repoNamespace;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['RepoOriginType'])) {
            $model->repoOriginType = $map['RepoOriginType'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }
        if (isset($map['RepoNamespace'])) {
            $model->repoNamespace = $map['RepoNamespace'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
