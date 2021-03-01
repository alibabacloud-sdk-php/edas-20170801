<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation;

use AlibabaCloud\Tea\Model;

class conf extends Model
{
    /**
     * @var string
     */
    public $postStart;

    /**
     * @var string
     */
    public $readiness;

    /**
     * @var bool
     */
    public $ahasEnabled;

    /**
     * @var string
     */
    public $k8sCmdArgs;

    /**
     * @var string
     */
    public $liveness;

    /**
     * @var string
     */
    public $deployAcrossNodes;

    /**
     * @var string
     */
    public $k8sCmd;

    /**
     * @var string
     */
    public $preStop;

    /**
     * @var string
     */
    public $jarStartArgs;

    /**
     * @var string
     */
    public $deployAcrossZones;

    /**
     * @var string
     */
    public $k8sNasInfo;

    /**
     * @var string
     */
    public $jarStartOptions;

    /**
     * @var string
     */
    public $runtimeClassName;

    /**
     * @var string
     */
    public $k8sLocalvolumeInfo;

    /**
     * @var string
     */
    public $k8sVolumeInfo;
    protected $_name = [
        'postStart'          => 'PostStart',
        'readiness'          => 'Readiness',
        'ahasEnabled'        => 'AhasEnabled',
        'k8sCmdArgs'         => 'K8sCmdArgs',
        'liveness'           => 'Liveness',
        'deployAcrossNodes'  => 'DeployAcrossNodes',
        'k8sCmd'             => 'K8sCmd',
        'preStop'            => 'PreStop',
        'jarStartArgs'       => 'JarStartArgs',
        'deployAcrossZones'  => 'DeployAcrossZones',
        'k8sNasInfo'         => 'K8sNasInfo',
        'jarStartOptions'    => 'JarStartOptions',
        'runtimeClassName'   => 'RuntimeClassName',
        'k8sLocalvolumeInfo' => 'K8sLocalvolumeInfo',
        'k8sVolumeInfo'      => 'K8sVolumeInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->postStart) {
            $res['PostStart'] = $this->postStart;
        }
        if (null !== $this->readiness) {
            $res['Readiness'] = $this->readiness;
        }
        if (null !== $this->ahasEnabled) {
            $res['AhasEnabled'] = $this->ahasEnabled;
        }
        if (null !== $this->k8sCmdArgs) {
            $res['K8sCmdArgs'] = $this->k8sCmdArgs;
        }
        if (null !== $this->liveness) {
            $res['Liveness'] = $this->liveness;
        }
        if (null !== $this->deployAcrossNodes) {
            $res['DeployAcrossNodes'] = $this->deployAcrossNodes;
        }
        if (null !== $this->k8sCmd) {
            $res['K8sCmd'] = $this->k8sCmd;
        }
        if (null !== $this->preStop) {
            $res['PreStop'] = $this->preStop;
        }
        if (null !== $this->jarStartArgs) {
            $res['JarStartArgs'] = $this->jarStartArgs;
        }
        if (null !== $this->deployAcrossZones) {
            $res['DeployAcrossZones'] = $this->deployAcrossZones;
        }
        if (null !== $this->k8sNasInfo) {
            $res['K8sNasInfo'] = $this->k8sNasInfo;
        }
        if (null !== $this->jarStartOptions) {
            $res['JarStartOptions'] = $this->jarStartOptions;
        }
        if (null !== $this->runtimeClassName) {
            $res['RuntimeClassName'] = $this->runtimeClassName;
        }
        if (null !== $this->k8sLocalvolumeInfo) {
            $res['K8sLocalvolumeInfo'] = $this->k8sLocalvolumeInfo;
        }
        if (null !== $this->k8sVolumeInfo) {
            $res['K8sVolumeInfo'] = $this->k8sVolumeInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conf
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PostStart'])) {
            $model->postStart = $map['PostStart'];
        }
        if (isset($map['Readiness'])) {
            $model->readiness = $map['Readiness'];
        }
        if (isset($map['AhasEnabled'])) {
            $model->ahasEnabled = $map['AhasEnabled'];
        }
        if (isset($map['K8sCmdArgs'])) {
            $model->k8sCmdArgs = $map['K8sCmdArgs'];
        }
        if (isset($map['Liveness'])) {
            $model->liveness = $map['Liveness'];
        }
        if (isset($map['DeployAcrossNodes'])) {
            $model->deployAcrossNodes = $map['DeployAcrossNodes'];
        }
        if (isset($map['K8sCmd'])) {
            $model->k8sCmd = $map['K8sCmd'];
        }
        if (isset($map['PreStop'])) {
            $model->preStop = $map['PreStop'];
        }
        if (isset($map['JarStartArgs'])) {
            $model->jarStartArgs = $map['JarStartArgs'];
        }
        if (isset($map['DeployAcrossZones'])) {
            $model->deployAcrossZones = $map['DeployAcrossZones'];
        }
        if (isset($map['K8sNasInfo'])) {
            $model->k8sNasInfo = $map['K8sNasInfo'];
        }
        if (isset($map['JarStartOptions'])) {
            $model->jarStartOptions = $map['JarStartOptions'];
        }
        if (isset($map['RuntimeClassName'])) {
            $model->runtimeClassName = $map['RuntimeClassName'];
        }
        if (isset($map['K8sLocalvolumeInfo'])) {
            $model->k8sLocalvolumeInfo = $map['K8sLocalvolumeInfo'];
        }
        if (isset($map['K8sVolumeInfo'])) {
            $model->k8sVolumeInfo = $map['K8sVolumeInfo'];
        }

        return $model;
    }
}
