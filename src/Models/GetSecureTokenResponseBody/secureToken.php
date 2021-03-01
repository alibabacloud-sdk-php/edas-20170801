<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetSecureTokenResponseBody;

use AlibabaCloud\Tea\Model;

class secureToken extends Model
{
    /**
     * @var string
     */
    public $secretKey;

    /**
     * @var string
     */
    public $accessKey;

    /**
     * @var string
     */
    public $belongRegion;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string
     */
    public $edasId;

    /**
     * @var string
     */
    public $addressServerHost;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'secretKey'         => 'SecretKey',
        'accessKey'         => 'AccessKey',
        'belongRegion'      => 'BelongRegion',
        'description'       => 'Description',
        'regionName'        => 'RegionName',
        'edasId'            => 'EdasId',
        'addressServerHost' => 'AddressServerHost',
        'userId'            => 'UserId',
        'id'                => 'Id',
        'tenantId'          => 'TenantId',
        'regionId'          => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->secretKey) {
            $res['SecretKey'] = $this->secretKey;
        }
        if (null !== $this->accessKey) {
            $res['AccessKey'] = $this->accessKey;
        }
        if (null !== $this->belongRegion) {
            $res['BelongRegion'] = $this->belongRegion;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->edasId) {
            $res['EdasId'] = $this->edasId;
        }
        if (null !== $this->addressServerHost) {
            $res['AddressServerHost'] = $this->addressServerHost;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return secureToken
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecretKey'])) {
            $model->secretKey = $map['SecretKey'];
        }
        if (isset($map['AccessKey'])) {
            $model->accessKey = $map['AccessKey'];
        }
        if (isset($map['BelongRegion'])) {
            $model->belongRegion = $map['BelongRegion'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['EdasId'])) {
            $model->edasId = $map['EdasId'];
        }
        if (isset($map['AddressServerHost'])) {
            $model->addressServerHost = $map['AddressServerHost'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
