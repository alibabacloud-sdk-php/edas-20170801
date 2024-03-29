<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UpdateAccountInfoRequest extends Model
{
    /**
     * @description The email address of the account.
     *
     * @example 1321234****@alibaba-inc.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The name of the account.
     *
     * @example edas-test
     *
     * @var string
     */
    public $name;

    /**
     * @description The contact information of the account.
     *
     * @example 1321234****
     *
     * @var string
     */
    public $telephone;
    protected $_name = [
        'email'     => 'Email',
        'name'      => 'Name',
        'telephone' => 'Telephone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->telephone) {
            $res['Telephone'] = $this->telephone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAccountInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Telephone'])) {
            $model->telephone = $map['Telephone'];
        }

        return $model;
    }
}
