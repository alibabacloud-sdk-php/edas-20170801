<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListMethodsResponseBody\serviceMethodList;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListMethodsResponseBody\serviceMethodList\serviceMethod\inputParams;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListMethodsResponseBody\serviceMethodList\serviceMethod\paramTypes;
use AlibabaCloud\Tea\Model;

class serviceMethod extends Model
{
    /**
     * @description The name of the application.
     *
     * @example App
     *
     * @var string
     */
    public $appName;

    /**
     * @var inputParams
     */
    public $inputParams;

    /**
     * @description The name of the service method.
     *
     * @example echo
     *
     * @var string
     */
    public $methodName;

    /**
     * @description The return type of the service method.
     *
     * @example java.lang.string
     *
     * @var string
     */
    public $output;

    /**
     * @var paramTypes
     */
    public $paramTypes;

    /**
     * @description The name of the service.
     *
     * @example com.alibaba.edas.demo.EchoService
     *
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'appName'     => 'AppName',
        'inputParams' => 'InputParams',
        'methodName'  => 'MethodName',
        'output'      => 'Output',
        'paramTypes'  => 'ParamTypes',
        'serviceName' => 'ServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->inputParams) {
            $res['InputParams'] = null !== $this->inputParams ? $this->inputParams->toMap() : null;
        }
        if (null !== $this->methodName) {
            $res['MethodName'] = $this->methodName;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }
        if (null !== $this->paramTypes) {
            $res['ParamTypes'] = null !== $this->paramTypes ? $this->paramTypes->toMap() : null;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceMethod
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['InputParams'])) {
            $model->inputParams = inputParams::fromMap($map['InputParams']);
        }
        if (isset($map['MethodName'])) {
            $model->methodName = $map['MethodName'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }
        if (isset($map['ParamTypes'])) {
            $model->paramTypes = paramTypes::fromMap($map['ParamTypes']);
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
