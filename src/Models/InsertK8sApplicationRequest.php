<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class InsertK8sApplicationRequest extends Model
{
    /**
     * @description The annotation of an application pod.
     *
     * @example {"annotation-name-1":"annotation-value-1","annotation-name-2":"annotation-value-2"}
     *
     * @var string
     */
    public $annotations;

    /**
     * @description The application configuration when the application template is used. Set this parameter to a JSON array.
     *
     * @example {}
     *
     * @var string
     */
    public $appConfig;

    /**
     * @description The name of the application. The name must start with a letter, and can contain digits, letters, and hyphens (-). It can be up to 36 characters in length.
     *
     * @example doc-test
     *
     * @var string
     */
    public $appName;

    /**
     * @description The name of the template used to create the application. If you specify an application template when you create an application, the application template and the AppConfig parameter are used to configure the application. Other configurations are ignored.
     *
     * @example app-template001
     *
     * @var string
     */
    public $appTemplateName;

    /**
     * @description The description of the application.
     *
     * @example Application in the production environment
     *
     * @var string
     */
    public $applicationDescription;

    /**
     * @description The version of `EDAS Container`. The value of this parameter conflicts with that of the `EdasContainerVersion` parameter. We recommend that you use the `EdasContainerVersion` parameter.
     *
     * @example -1
     *
     * @var string
     */
    public $buildPackId;

    /**
     * @description The ID of the cluster. You can call the ListCluster operation to query the cluster ID. For more information, see [ListCluster](~~154995~~).
     *
     * @example c9cd****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The application startup command. If you specify this parameter, the value of this parameter will replace the startup command in the image.
     *
     * @example ls
     *
     * @var string
     */
    public $command;

    /**
     * @description The arguments in the command. The parameter value is a JSON array of strings. An example is `[{"argument":"-c"},{"argument":"test"}]`, where `-c` and `test` are two arguments that can be set.
     *
     * @example [{"argument":"-lh"}]
     *
     * @var string
     */
    public $commandArgs;

    /**
     * @description The configuration for mounting a Kubernetes ConfigMap or Secret to a directory in an elastic container instance. The following parameters are included in the configuration:
     *
     *   name: the name of the Kubernetes ConfigMap or Secret.
     *   type: the type of the API object that you want to mount. You can mount a Kubernetes ConfigMap or Secret.
     *   mountPath: the mount path. The mount path must be an absolute path that starts with a forward slash (/).
     *
     * @example [{"name":"nginx-config","type":"ConfigMap","mountPath":"/etc/nginx"},{"name":"tls-secret","type":"secret","mountPath":"/etc/ssh"}]
     *
     * @var string
     */
    public $configMountDescs;

    /**
     * @description The ID of the repository used to build the image repository. If this parameter is left empty, the default repository provided by EDAS is used. Only the default repository provided by EDAS is supported.
     *
     * @example Leave empty
     *
     * @var string
     */
    public $containerRegistryId;

    /**
     * @description The ID of the cluster. This parameter is required only when you create the application in a cluster that has not been imported.
     *
     * @example abcdefg
     *
     * @var string
     */
    public $csClusterId;

    /**
     * @description The custom affinity.
     *
     * @example demo
     *
     * @var string
     */
    public $customAffinity;

    /**
     * @var string
     */
    public $customAgentVersion;

    /**
     * @description The custom tolerances.
     *
     * @example demo
     *
     * @var string
     */
    public $customTolerations;

    /**
     * @description Specifies whether to distribute application instances across nodes. Value `true` indicates that application instances are distributed across nodes. Other values indicate that application instances are not distributed across nodes.
     *
     * @example true
     *
     * @var string
     */
    public $deployAcrossNodes;

    /**
     * @description Specifies whether to distribute application instances across zones. Value `true` indicates that application instances are distributed across zones. Other values indicate that application instances are not distributed across zones.
     *
     * @example true
     *
     * @var string
     */
    public $deployAcrossZones;

    /**
     * @description The version of `EDAS Container` on which the deployment package of the application depends.
     *
     * > This parameter is unavailable if you deploy applications by using images.
     * @example 3.5.9
     *
     * @var string
     */
    public $edasContainerVersion;

    /**
     * @description The configuration for mounting a Kubernetes emptyDir volume to a directory in an elastic container instance. The following parameters are included in the configuration:
     *
     *   mountPath: The mount path in the container. This parameter is required.
     *   readOnly: (Optional) The mount mode. Value true indicates the read-only mode. Value false indicates the read and write mode. Default value: false.
     *   subPathExpr: (Optional) The regular expression that is used to match the subdirectory.
     *
     * @example [{"mountPath":"/app-log","subPathExpr":"$(POD_IP)"},{"readOnly":true,"mountPath":"/etc/nginx"}]
     *
     * @var string
     */
    public $emptyDirs;

    /**
     * @description Specifies whether to enable access to Application High Availability Service (AHAS). Valid values:
     *
     *   true: enables access to AHAS.
     *   false: does not enable access to AHAS.
     *
     * @example true
     *
     * @var bool
     */
    public $enableAhas;

    /**
     * @description Specifies whether to activate Alibaba Cloud Service Mesh (ASM). Set this parameter to true only when you create the application in a cluster that has not been imported and you need to use ASM.
     *
     * @example false
     *
     * @var bool
     */
    public $enableAsm;

    /**
     * @description Specifies whether to enable the empty list protection feature. Valid values:
     *
     *   true: enables the empty list protection feature.
     *   false: disables the empty list protection feature.
     *
     * @example false
     *
     * @var bool
     */
    public $enableEmptyPushReject;

    /**
     * @description Specifies whether to enable graceful start rules. Valid values:
     *
     *   true: enables graceful start rules.
     *   false: disables graceful start rules.
     *
     * @example true
     *
     * @var bool
     */
    public $enableLosslessRule;

    /**
     * @description The Kubernetes environment variables that are configured in EnvFrom mode. A ConfigMap or Secret is mounted to a directory. Each key corresponds to a file in the directory, and the content of the file is the value of the key.
     *
     * The following parameters are included in the configuration:
     *
     *   configMapRef: the ConfigMap that is referenced. The following parameter is contained:
     *
     *   name: the name of the ConfigMap.
     *
     *   secretRef: the Secret that is referenced. The following parameter is contained:
     *
     *   name: the name of the Secret.
     *
     * @example [{"name":"appname","valueFrom":{"configMapKeyRef":{"name":"appconf","key":"name"}}}]
     *
     * @var string
     */
    public $envFroms;

    /**
     * @description The environment variables that are used to deploy the application. The value must be a JSON array. Valid values: regular environment variables, Kubernetes ConfigMap environment variables, or Kubernetes Secret environment variables. Specify regular environment variables in the following format:
     *
     * >  If you want to cancel this configuration, set this parameter to an empty JSON array in the format of "\[]".
     * @example [{"name":"x1","value":"y1"},{"name":"x2","valueFrom":{"configMapKeyRef":{"name":"my-config","key":"y2"}}},{"name":"x3","valueFrom":{"secretKeyRef":{"name":"my-secret","key":"y3"}}}]
     *
     * @var string
     */
    public $envs;

    /**
     * @var string
     */
    public $featureConfig;

    /**
     * @var string
     */
    public $imagePlatforms;

    /**
     * @description The URL of the image. This parameter is required if you set the `PackageType` parameter to `Image`.
     *
     * @example registry.cn-beijing.aliyuncs.com/****_test/****-cons****:1.0
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @example [
     * ]
     * @var string
     */
    public $initContainers;

    /**
     * @description The ID of the Internet-facing SLB instance. If you do not specify this parameter, EDAS automatically purchases a new SLB instance for you.
     *
     * @example a3d4********
     *
     * @var string
     */
    public $internetSlbId;

    /**
     * @description The frontend port of the Internet-facing SLB instance. Valid values: 1 to 65535.
     *
     * @example 80
     *
     * @var int
     */
    public $internetSlbPort;

    /**
     * @description The protocol used by the Internet-facing SLB instance. Valid values: TCP, HTTP, and HTTPS.
     *
     * @example TCP
     *
     * @var string
     */
    public $internetSlbProtocol;

    /**
     * @description The backend port of the internal-facing SLB instance. This port also serves as the service port of the application. Valid values: 1 to 65535.
     *
     * @example 8080
     *
     * @var int
     */
    public $internetTargetPort;

    /**
     * @description The ID of the internal-facing SLB instance. If you do not specify this parameter, Enterprise Distributed Application Service (EDAS) automatically purchases a new SLB instance for you.
     *
     * @example ae93********
     *
     * @var string
     */
    public $intranetSlbId;

    /**
     * @description The frontend port of the internal-facing SLB instance. Valid values: 1 to 65535.
     *
     * @example 80
     *
     * @var int
     */
    public $intranetSlbPort;

    /**
     * @description The protocol used by the internal-facing SLB instance. Valid values: TCP, HTTP, and HTTPS.
     *
     * @example TCP
     *
     * @var string
     */
    public $intranetSlbProtocol;

    /**
     * @description The backend port of the internal-facing Server Load Balancer (SLB) instance. This port also serves as the service port of the application. Valid values: 1 to 65535.
     *
     * @example 80
     *
     * @var int
     */
    public $intranetTargetPort;

    /**
     * @description Specifies whether the application is a multi-language application.
     *
     * @example true
     *
     * @var bool
     */
    public $isMultilingualApp;

    /**
     * @description The version of the Java Development Kit (JDK) on which the deployment package of the application depends. Valid values: Open JDK 7 and Open JDK 8. This parameter is unavailable if you deploy applications by using images.
     *
     * @example Open JDK 8
     *
     * @var string
     */
    public $JDK;

    /**
     * @description The configuration of Java startup parameters for a Java application. These startup parameters involve the memory, application, garbage collection (GC) policy, tools, service registration and discovery, and custom configurations. Appropriate parameter settings help reduce the GC overheads, shorten the server response time, and improve the throughput. Set this parameter to a JSON string. In the example, original indicates the configuration value, and startup indicates a startup parameter. The system automatically concatenates all startup values as the settings of Java startup parameters for the application. To delete this configuration, leave the parameter value empty by entering `""` or `"{}"`. The following parameters are included in the configuration:
     *
     *   InitialHeapSize: the initial size of the heap memory.
     *   MaxHeapSize: the maximum size of the heap memory.
     *   CustomParams: the custom parameters, such as JVM -D parameters.
     *   Other parameters: You can view the JSON structure submitted by the frontend.
     *
     * @example {"InitialHeapSize":{"original":512,"startup":"-Xms512m"},"MaxHeapSize":{"original":1024,"startup":"-Xmx1024m"},"CustomParams":{"original":"-Dcustom.property.sample=false","startup":"-Dcustom.property.sample=false"}}
     *
     * @var string
     */
    public $javaStartUpConfig;

    /**
     * @description The label of an application pod.
     *
     * @example {"label-name-1":"label-value-1","label-name-2":"label-value-2"}
     *
     * @var string
     */
    public $labels;

    /**
     * @description The maximum number of CPU cores allowed for each application instance when the application is running. Unit: cores. If the LimitmCpu parameter is specified, you can ignore this parameter.
     *
     * @example 4
     *
     * @var int
     */
    public $limitCpu;

    /**
     * @description The maximum size of space required by ephemeral storage. Unit: GB. Value 0 indicates that no limit is set on the space size.
     *
     * @example 4
     *
     * @var int
     */
    public $limitEphemeralStorage;

    /**
     * @description The maximum size of memory allowed for each application instance when the application is running. Unit: MB. The value of LimitMem must be greater than that of RequestsMem.
     *
     * @example 2
     *
     * @var int
     */
    public $limitMem;

    /**
     * @description The maximum number of CPU cores allowed for each application instance when the application is running. Unit: millicores. Value 0 indicates that no limit is set on CPU cores.
     *
     * @example 1000
     *
     * @var int
     */
    public $limitmCpu;

    /**
     * @description The configuration for the liveness check on the container. Example: `{"failureThreshold": 3,"initialDelaySeconds": 5,"successThreshold": 1,"timeoutSeconds": 1,"tcpSocket":{"host":"", "port":8080}}`.
     *
     * If you want to cancel this configuration, leave the parameter value empty by entering `""` or `{}`. If you do not specify this parameter, this configuration is ignored.
     * @example {"failureThreshold": 3,"initialDelaySeconds": 5,"successThreshold": 1,"timeoutSeconds": 1,"tcpSocket":{"host":"", "port":8080}}
     *
     * @var string
     */
    public $liveness;

    /**
     * @description The configurations that are used when the host files are mounted to the container on which the application is running. Example: `\[{"type":"","nodePath":"/localfiles","mountPath":"/app/files"},{"type":"Directory","nodePath":"/mnt","mountPath":"/app/storage"}\]`. Description:
     *
     *   `nodePath`: the host path.
     *   `mountPath`: the path in the container.
     *   `type`: the mounting type.
     *
     * @example [{"type":"","nodePath":"/localfiles","mountPath":"/app/files"},{"type":"Directory","nodePath":"/mnt","mountPath":"/app/storage"}]
     *
     * @var string
     */
    public $localVolume;

    /**
     * @description The ID of the EDAS namespace. This parameter is required for a non-default namespace.
     *
     * @example cn-shenzhen:beta****
     *
     * @var string
     */
    public $logicalRegionId;

    /**
     * @description Specifies whether to enable the graceful rolling deployment mode and ensure that the service is registered before the readiness check. Valid values:
     *
     *   true: provides port 55199 and the /health path for the health check in a non-intrusive manner. When the service is registered, the system returns HTTP 200 status code. Otherwise, the system returns HTTP 500 status code.
     *
     **
     *
     **Note**If you set both the `LosslessRuleRelated` parameter and this parameter to `true`, the operation checks whether the service prefetching is complete.
     *
     *   false: does not check whether the service is registered.
     *
     * @example false
     *
     * @var bool
     */
    public $losslessRuleAligned;

    /**
     * @description The delay of service registration. Valid values: 0 to 86400. Unit: seconds.
     *
     * @example 0
     *
     * @var int
     */
    public $losslessRuleDelayTime;

    /**
     * @description The number of prefetching curves. Valid values: 0 to 20. The default value is 2, which is suitable for common prefetching scenarios. This value indicates that the received traffic of the provider during prefetching is displayed as a quadratic curve.
     *
     * @example 2
     *
     * @var int
     */
    public $losslessRuleFuncType;

    /**
     * @description Specifies whether to enable the graceful rolling deployment mode and ensure that the service prefetching is complete before the readiness check. Valid values:
     *
     *   true: provides port 55199 and the /health path for the health check in a non-intrusive manner. When the service prefetching is complete, the system returns HTTP 200 status code. Otherwise, the system returns HTTP 500 status code.
     *   false: does not check whether the service prefetching is complete.
     *
     * @example false
     *
     * @var bool
     */
    public $losslessRuleRelated;

    /**
     * @description The service prefetching duration. Valid values: 0 to 86400. Unit: seconds.
     *
     * @example 120
     *
     * @var int
     */
    public $losslessRuleWarmupTime;

    /**
     * @description The description of the NAS mounting configuration. Set this parameter to a serialized JSON string. Example: `\[{"nasPath": "/k8s","mountPath": "/mnt"},{"nasPath": "/files","mountPath": "/app/files"}\]`. The `nasPath` parameter specifies the file storage path, and the `mountPath` parameter specifies the path to mount the file system to the container where the application is running.
     *
     * @example [{"nasPath": "/k8s","mountPath": "/mnt"},{"nasPath": "/files","mountPath": "/app/files"}]
     *
     * @var string
     */
    public $mountDescs;

    /**
     * @description The namespace of the Kubernetes cluster. This parameter specifies the Kubernetes namespace in which your application is deployed. By default, the default namespace is used.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The ID of the Network Attached Storage (NAS) file system that you want to mount to the application. If you do not specify this parameter but specify the MountDescs parameter, a NAS file system is automatically purchased and mounted to the vSwitch in the VPC.
     *
     * @example dfs23****
     *
     * @var string
     */
    public $nasId;

    /**
     * @description The type of the deployment package. Valid values: FatJar, WAR, and Image.
     *
     * @example WAR
     *
     * @var string
     */
    public $packageType;

    /**
     * @description The URL of the deployment package. This parameter is required if you use a FatJar or WAR package to deploy the application.
     *
     * > The version of EDAS SDK for Java or Python must be V2.44.0 or later.
     * @example https://e***.oss-cn-beijing.aliyuncs.com/s***-1.0-SNAPSHOT-spring-boot.jar
     *
     * @var string
     */
    public $packageUrl;

    /**
     * @description The version of the deployment package. This parameter is required if you use a FatJar or WAR package to deploy the application. You must specify a version.
     *
     * > The version of EDAS SDK for Java or Python must be V2.44.0 or later.
     * @example 20200720
     *
     * @var string
     */
    public $packageVersion;

    /**
     * @description The post-start script. Example: `{"exec":{"command":\["cat","/etc/group"\]}}`.
     *
     * If you want to cancel this configuration, leave this parameter empty by setting it to `""` or `{}`. If you do not specify this parameter, this configuration is ignored.
     * @example {\"exec\":{\"command\":[\"ls\",\"/\"]}}"
     *
     * @var string
     */
    public $postStart;

    /**
     * @description The pre-stop script. Example: `{"tcpSocket":{"host":"", "port":8080}}`.
     *
     * If you want to cancel this configuration, leave this parameter empty by setting it to `""` or `{}`. If you do not specify this parameter, this configuration is ignored.
     * @example {\"exec\":{\"command\":[\"ls\",\"/\"]}}"
     *
     * @var string
     */
    public $preStop;

    /**
     * @description The configuration for mounting a Kubernetes PersistentVolumeClaim (PVC) volume to a directory in an elastic container instance. The following parameters are included in the configuration:
     *
     *   pvcName: the name of the PVC volume. Make sure that the PVC volume is an existing volume and is in the Bound state.
     *
     *   mountPaths: the directory to which you want to mount the PVC volume. You can configure multiple directories. You can set the following two parameters for each mount directory:
     *
     *   mountPath: the mount path. The mount path must be an absolute path that starts with a forward slash (/).
     *   readOnly: the mount mode. Value true indicates the read-only mode. Value false indicates the read and write mode. Default value: false.
     *
     * @example [{"pvcName":"nas-pvc-1","mountPaths":[{"mountPath":"/usr/share/nginx/data"},{"mountPath":"/usr/share/nginx/html","readOnly":true}]}]
     *
     * @var string
     */
    public $pvcMountDescs;

    /**
     * @description The configuration for the readiness check on the container. If the check fails, the traffic that passes through the Kubernetes Service is not transmitted to the container. Example: \`{"failureThreshold": 3,"initialDelaySeconds": 5,"successThreshold": 1,"timeoutSeconds": 1,"httpGet": {"path": "/consumer","port": 8080,"scheme": "HTTP","httpHeaders": \\[{"name": "test","value": "testvalue"}\\]}}\`.``
     *
     * If you want to cancel this configuration, leave the parameter value empty by entering `""` or `{}`. If you do not specify this parameter, this configuration is ignored.
     * @example {"failureThreshold": 3,"initialDelaySeconds": 5,"successThreshold": 1,"timeoutSeconds": 1,"httpGet": {"path": "/consumer","port": 8080,"scheme": "HTTP","httpHeaders": [{"name": "test","value": "testvalue"}]}}
     *
     * @var string
     */
    public $readiness;

    /**
     * @description The number of application instances.
     *
     * @example 4
     *
     * @var int
     */
    public $replicas;

    /**
     * @description The ID of the image repository.
     *
     * @example ced********
     *
     * @var string
     */
    public $repoId;

    /**
     * @description The maximum number of CPU cores allowed for each application instance when the application is created. Unit: cores. Value 0 indicates that no limit is set on CPU cores. If the RequestsmCpu parameter is specified, the value of the RequestsmCpu parameter is used. You can ignore this parameter.
     *
     * @example 0
     *
     * @var int
     */
    public $requestsCpu;

    /**
     * @description The minimum size of space required by ephemeral storage. Unit: GB. Value 0 indicates that no limit is set on the space size.
     *
     * @example 2
     *
     * @var int
     */
    public $requestsEphemeralStorage;

    /**
     * @description The maximum size of memory allowed for each application instance when the application is created. Unit: MB. Value 0 indicates that no limit is set on the memory size. The value of RequestsMem cannot be greater than that of LimitMem.
     *
     * @example 0
     *
     * @var int
     */
    public $requestsMem;

    /**
     * @description The maximum number of CPU cores allowed for each application instance when the application is created. Unit: millicores.
     *
     * @example 500
     *
     * @var int
     */
    public $requestsmCpu;

    /**
     * @description The ID of the resource group.
     *
     * @example 461
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The type of the container runtime. This parameter is applicable only to clusters that use sandboxed containers.
     *
     * @example runc
     *
     * @var string
     */
    public $runtimeClassName;

    /**
     * @description The name of the credential that is used to pull the images specified by the user. You must configure the Secret.
     *
     * @example edas-app-01-image-secret
     *
     * @var string
     */
    public $secretName;

    /**
     * @description The configurations of services in a Kubernetes cluster.
     *
     * @example [{"name": "test-svc-create","serviceType":"ClusterIP","portMappings":[{"servicePort": {"targetPort":8080,"port":80,"protocol":"TCP"}}]}]
     *
     * @var string
     */
    public $serviceConfigs;

    /**
     * @example [{"yamlEncoded":"Y29tbWFuZDoKICAtIHRhaWwKICAtICctZicKICAtIC9kZXYvbnVsbAppbWFnZTogJ2J1c3lib3g6bGF0ZXN0JwpuYW1lOiBidXN5Ym94Cg=="}]
     *
     * @var string
     */
    public $sidecars;

    /**
     * @description The Logstore configuration. To delete this configuration, leave the parameter value empty by entering `""` or `"{}"`.
     *
     *   The following parameters are included in the configuration:
     *
     *   type: the collection type. Set this parameter to file to specify the file type. Set this parameter to stdout to specify the standard output type.
     *
     *   logstore: the name of the Logstore. Make sure that the name of the Logstore is unique in the cluster. The name must comply with the following rules:
     *
     *   The name can contain only lowercase letters, digits, hyphens (-), and underscores (\_).
     *   The name must start and end with a lowercase letter or a digit.
     *   The name must be 3 to 63 characters in length. If you leave this parameter empty, the system automatically generates a name.
     *
     *   LogDir: If the standard output type is used, the collection path is stdout.log. If the file type is used, the collection path is the path of the collected file. Wildcards (\*) are supported. The collection path must match the following regular expression: `^/(.+)/(.*)^/$`.
     *
     * @example [{"logstore":"thisisanotherfilelog","type":"file","logDir":"/var/log/*"},{"logstore":"","type":"stdout","logDir":"stdout.log"},{"logstore":"thisisafilelog","type":"file","logDir":"/tmp/log/*"}]
     *
     * @var string
     */
    public $slsConfigs;

    /**
     * @example {"failureThreshold": 3,"initialDelaySeconds": 5,"successThreshold": 1,"timeoutSeconds": 1,"tcpSocket":{"host":"", "port":8080}}
     *
     * @var string
     */
    public $startup;

    /**
     * @description The storage type of the NAS file system.
     *
     *   Valid values for General-purpose NAS file systems: Capacity and Performance.
     *   Valid values for Extreme NAS file systems: Standard and Advance.
     *
     * You can set this parameter only to Performance.
     * @example Performance
     *
     * @var string
     */
    public $storageType;

    /**
     * @example 120
     *
     * @var int
     */
    public $terminateGracePeriod;

    /**
     * @description The timeout period of the change process. Valid values: 1 to 1800. Unit: seconds. If you do not specify this Unidentifiedparameter, the default value 1800 is used.
     *
     * @example 60
     *
     * @var int
     */
    public $timeout;

    /**
     * @description The URI encoding scheme. Valid values: ISO-8859-1, GBK, GB2312, and UTF-8.
     *
     * > If you do not specify this parameter in the application configurations, the default URI encoding scheme in the Tomcat container is applied.
     * @example GBK
     *
     * @var string
     */
    public $uriEncoding;

    /**
     * @description Specifies whether to use the encoding scheme specified in the request body for URI query parameters.
     *
     * > If this parameter is not specified in application configuration, the default value false is applied.
     * @example false
     *
     * @var bool
     */
    public $useBodyEncoding;

    /**
     * @example openjdk:8u302
     *
     * @var string
     */
    public $userBaseImageUrl;

    /**
     * @description The version of the Tomcat container on which the deployment package of the application depends. This parameter is applicable to Spring Cloud and Dubbo applications that you deploy by using WAR packages. This parameter is unavailable if you deploy applications by using images.
     *
     * @example apache-tomcat-7.0.91
     *
     * @var string
     */
    public $webContainer;

    /**
     * @description The configuration of the Tomcat container. If you want to cancel this configuration, set this parameter to "" or "{}". The following parameters are included in the configuration:
     *
     *   useDefaultConfig: specifies whether to use the default configuration. Value true indicates that the default configuration is used. Value false indicates that the custom configuration is used. If the default configuration is used, the following parameters do not take effect:
     *
     *   contextInputType: the type of the access path for the application. Valid values:
     *
     *   war: The access path is the name of the WAR package. You do not need to specify a custom path.
     *   root: The access path for the application is `/`. You do not need to specify a custom path.
     *   custom: If you select this option, you must specify a custom path for the contextPath parameter.
     *
     *   contextPath: the custom access path for the application. This parameter is required only when you set the contextInputType parameter to custom.
     *
     *   httpPort: the port number. The port number ranges from 1024 to 65535. Though the admin permissions are configured for the container, the root permissions are required to perform operations on ports whose number is less than 1024. Enter a value that ranges from 1024 to 65535 because the container has only the admin permissions. If you do not configure this parameter, the default port number 8080 is used.
     *
     *   maxThreads: the maximum number of connections in the connection pool. Default value: 400.
     *
     **
     *
     **Note**This parameter significantly affects application performance. We recommend that you consult with technical support before you set this parameter.
     *
     *   uriEncoding: the URI encoding scheme in the Tomcat container. Valid values: UTF-8, ISO-8859-1, GBK, and GB2312. If you do not specify this parameter, the default value ISO-8859-1 is used.
     *
     *   useBodyEncoding: specifies whether to use the encoding scheme specified in the request body for URI query parameters.
     *
     *   useAdvancedServerXml: specifies whether to use advanced configurations to customize the server.xml file. If the preceding parameter types and specific parameters cannot meet your requirements, you can use advanced configurations to customize the server.xml file of Tomcat.
     *
     *   serverXml: the content of the server.xml file customized by using advanced configurations. This parameter takes effect only when you set the useAdvancedServerXml parameter to true.
     *
     * @example {"useDefaultConfig":false,"contextInputType":"custom","contextPath":"hello","httpPort":8088,"maxThreads":400,"uriEncoding":"UTF-8","useBodyEncoding":true,"useAdvancedServerXml":false}
     *
     * @var string
     */
    public $webContainerConfig;

    /**
     * @example Deployment
     *
     * @var string
     */
    public $workloadType;
    protected $_name = [
        'annotations'              => 'Annotations',
        'appConfig'                => 'AppConfig',
        'appName'                  => 'AppName',
        'appTemplateName'          => 'AppTemplateName',
        'applicationDescription'   => 'ApplicationDescription',
        'buildPackId'              => 'BuildPackId',
        'clusterId'                => 'ClusterId',
        'command'                  => 'Command',
        'commandArgs'              => 'CommandArgs',
        'configMountDescs'         => 'ConfigMountDescs',
        'containerRegistryId'      => 'ContainerRegistryId',
        'csClusterId'              => 'CsClusterId',
        'customAffinity'           => 'CustomAffinity',
        'customAgentVersion'       => 'CustomAgentVersion',
        'customTolerations'        => 'CustomTolerations',
        'deployAcrossNodes'        => 'DeployAcrossNodes',
        'deployAcrossZones'        => 'DeployAcrossZones',
        'edasContainerVersion'     => 'EdasContainerVersion',
        'emptyDirs'                => 'EmptyDirs',
        'enableAhas'               => 'EnableAhas',
        'enableAsm'                => 'EnableAsm',
        'enableEmptyPushReject'    => 'EnableEmptyPushReject',
        'enableLosslessRule'       => 'EnableLosslessRule',
        'envFroms'                 => 'EnvFroms',
        'envs'                     => 'Envs',
        'featureConfig'            => 'FeatureConfig',
        'imagePlatforms'           => 'ImagePlatforms',
        'imageUrl'                 => 'ImageUrl',
        'initContainers'           => 'InitContainers',
        'internetSlbId'            => 'InternetSlbId',
        'internetSlbPort'          => 'InternetSlbPort',
        'internetSlbProtocol'      => 'InternetSlbProtocol',
        'internetTargetPort'       => 'InternetTargetPort',
        'intranetSlbId'            => 'IntranetSlbId',
        'intranetSlbPort'          => 'IntranetSlbPort',
        'intranetSlbProtocol'      => 'IntranetSlbProtocol',
        'intranetTargetPort'       => 'IntranetTargetPort',
        'isMultilingualApp'        => 'IsMultilingualApp',
        'JDK'                      => 'JDK',
        'javaStartUpConfig'        => 'JavaStartUpConfig',
        'labels'                   => 'Labels',
        'limitCpu'                 => 'LimitCpu',
        'limitEphemeralStorage'    => 'LimitEphemeralStorage',
        'limitMem'                 => 'LimitMem',
        'limitmCpu'                => 'LimitmCpu',
        'liveness'                 => 'Liveness',
        'localVolume'              => 'LocalVolume',
        'logicalRegionId'          => 'LogicalRegionId',
        'losslessRuleAligned'      => 'LosslessRuleAligned',
        'losslessRuleDelayTime'    => 'LosslessRuleDelayTime',
        'losslessRuleFuncType'     => 'LosslessRuleFuncType',
        'losslessRuleRelated'      => 'LosslessRuleRelated',
        'losslessRuleWarmupTime'   => 'LosslessRuleWarmupTime',
        'mountDescs'               => 'MountDescs',
        'namespace'                => 'Namespace',
        'nasId'                    => 'NasId',
        'packageType'              => 'PackageType',
        'packageUrl'               => 'PackageUrl',
        'packageVersion'           => 'PackageVersion',
        'postStart'                => 'PostStart',
        'preStop'                  => 'PreStop',
        'pvcMountDescs'            => 'PvcMountDescs',
        'readiness'                => 'Readiness',
        'replicas'                 => 'Replicas',
        'repoId'                   => 'RepoId',
        'requestsCpu'              => 'RequestsCpu',
        'requestsEphemeralStorage' => 'RequestsEphemeralStorage',
        'requestsMem'              => 'RequestsMem',
        'requestsmCpu'             => 'RequestsmCpu',
        'resourceGroupId'          => 'ResourceGroupId',
        'runtimeClassName'         => 'RuntimeClassName',
        'secretName'               => 'SecretName',
        'serviceConfigs'           => 'ServiceConfigs',
        'sidecars'                 => 'Sidecars',
        'slsConfigs'               => 'SlsConfigs',
        'startup'                  => 'Startup',
        'storageType'              => 'StorageType',
        'terminateGracePeriod'     => 'TerminateGracePeriod',
        'timeout'                  => 'Timeout',
        'uriEncoding'              => 'UriEncoding',
        'useBodyEncoding'          => 'UseBodyEncoding',
        'userBaseImageUrl'         => 'UserBaseImageUrl',
        'webContainer'             => 'WebContainer',
        'webContainerConfig'       => 'WebContainerConfig',
        'workloadType'             => 'WorkloadType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->annotations) {
            $res['Annotations'] = $this->annotations;
        }
        if (null !== $this->appConfig) {
            $res['AppConfig'] = $this->appConfig;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appTemplateName) {
            $res['AppTemplateName'] = $this->appTemplateName;
        }
        if (null !== $this->applicationDescription) {
            $res['ApplicationDescription'] = $this->applicationDescription;
        }
        if (null !== $this->buildPackId) {
            $res['BuildPackId'] = $this->buildPackId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->commandArgs) {
            $res['CommandArgs'] = $this->commandArgs;
        }
        if (null !== $this->configMountDescs) {
            $res['ConfigMountDescs'] = $this->configMountDescs;
        }
        if (null !== $this->containerRegistryId) {
            $res['ContainerRegistryId'] = $this->containerRegistryId;
        }
        if (null !== $this->csClusterId) {
            $res['CsClusterId'] = $this->csClusterId;
        }
        if (null !== $this->customAffinity) {
            $res['CustomAffinity'] = $this->customAffinity;
        }
        if (null !== $this->customAgentVersion) {
            $res['CustomAgentVersion'] = $this->customAgentVersion;
        }
        if (null !== $this->customTolerations) {
            $res['CustomTolerations'] = $this->customTolerations;
        }
        if (null !== $this->deployAcrossNodes) {
            $res['DeployAcrossNodes'] = $this->deployAcrossNodes;
        }
        if (null !== $this->deployAcrossZones) {
            $res['DeployAcrossZones'] = $this->deployAcrossZones;
        }
        if (null !== $this->edasContainerVersion) {
            $res['EdasContainerVersion'] = $this->edasContainerVersion;
        }
        if (null !== $this->emptyDirs) {
            $res['EmptyDirs'] = $this->emptyDirs;
        }
        if (null !== $this->enableAhas) {
            $res['EnableAhas'] = $this->enableAhas;
        }
        if (null !== $this->enableAsm) {
            $res['EnableAsm'] = $this->enableAsm;
        }
        if (null !== $this->enableEmptyPushReject) {
            $res['EnableEmptyPushReject'] = $this->enableEmptyPushReject;
        }
        if (null !== $this->enableLosslessRule) {
            $res['EnableLosslessRule'] = $this->enableLosslessRule;
        }
        if (null !== $this->envFroms) {
            $res['EnvFroms'] = $this->envFroms;
        }
        if (null !== $this->envs) {
            $res['Envs'] = $this->envs;
        }
        if (null !== $this->featureConfig) {
            $res['FeatureConfig'] = $this->featureConfig;
        }
        if (null !== $this->imagePlatforms) {
            $res['ImagePlatforms'] = $this->imagePlatforms;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->initContainers) {
            $res['InitContainers'] = $this->initContainers;
        }
        if (null !== $this->internetSlbId) {
            $res['InternetSlbId'] = $this->internetSlbId;
        }
        if (null !== $this->internetSlbPort) {
            $res['InternetSlbPort'] = $this->internetSlbPort;
        }
        if (null !== $this->internetSlbProtocol) {
            $res['InternetSlbProtocol'] = $this->internetSlbProtocol;
        }
        if (null !== $this->internetTargetPort) {
            $res['InternetTargetPort'] = $this->internetTargetPort;
        }
        if (null !== $this->intranetSlbId) {
            $res['IntranetSlbId'] = $this->intranetSlbId;
        }
        if (null !== $this->intranetSlbPort) {
            $res['IntranetSlbPort'] = $this->intranetSlbPort;
        }
        if (null !== $this->intranetSlbProtocol) {
            $res['IntranetSlbProtocol'] = $this->intranetSlbProtocol;
        }
        if (null !== $this->intranetTargetPort) {
            $res['IntranetTargetPort'] = $this->intranetTargetPort;
        }
        if (null !== $this->isMultilingualApp) {
            $res['IsMultilingualApp'] = $this->isMultilingualApp;
        }
        if (null !== $this->JDK) {
            $res['JDK'] = $this->JDK;
        }
        if (null !== $this->javaStartUpConfig) {
            $res['JavaStartUpConfig'] = $this->javaStartUpConfig;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->limitCpu) {
            $res['LimitCpu'] = $this->limitCpu;
        }
        if (null !== $this->limitEphemeralStorage) {
            $res['LimitEphemeralStorage'] = $this->limitEphemeralStorage;
        }
        if (null !== $this->limitMem) {
            $res['LimitMem'] = $this->limitMem;
        }
        if (null !== $this->limitmCpu) {
            $res['LimitmCpu'] = $this->limitmCpu;
        }
        if (null !== $this->liveness) {
            $res['Liveness'] = $this->liveness;
        }
        if (null !== $this->localVolume) {
            $res['LocalVolume'] = $this->localVolume;
        }
        if (null !== $this->logicalRegionId) {
            $res['LogicalRegionId'] = $this->logicalRegionId;
        }
        if (null !== $this->losslessRuleAligned) {
            $res['LosslessRuleAligned'] = $this->losslessRuleAligned;
        }
        if (null !== $this->losslessRuleDelayTime) {
            $res['LosslessRuleDelayTime'] = $this->losslessRuleDelayTime;
        }
        if (null !== $this->losslessRuleFuncType) {
            $res['LosslessRuleFuncType'] = $this->losslessRuleFuncType;
        }
        if (null !== $this->losslessRuleRelated) {
            $res['LosslessRuleRelated'] = $this->losslessRuleRelated;
        }
        if (null !== $this->losslessRuleWarmupTime) {
            $res['LosslessRuleWarmupTime'] = $this->losslessRuleWarmupTime;
        }
        if (null !== $this->mountDescs) {
            $res['MountDescs'] = $this->mountDescs;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->nasId) {
            $res['NasId'] = $this->nasId;
        }
        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }
        if (null !== $this->packageUrl) {
            $res['PackageUrl'] = $this->packageUrl;
        }
        if (null !== $this->packageVersion) {
            $res['PackageVersion'] = $this->packageVersion;
        }
        if (null !== $this->postStart) {
            $res['PostStart'] = $this->postStart;
        }
        if (null !== $this->preStop) {
            $res['PreStop'] = $this->preStop;
        }
        if (null !== $this->pvcMountDescs) {
            $res['PvcMountDescs'] = $this->pvcMountDescs;
        }
        if (null !== $this->readiness) {
            $res['Readiness'] = $this->readiness;
        }
        if (null !== $this->replicas) {
            $res['Replicas'] = $this->replicas;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }
        if (null !== $this->requestsCpu) {
            $res['RequestsCpu'] = $this->requestsCpu;
        }
        if (null !== $this->requestsEphemeralStorage) {
            $res['RequestsEphemeralStorage'] = $this->requestsEphemeralStorage;
        }
        if (null !== $this->requestsMem) {
            $res['RequestsMem'] = $this->requestsMem;
        }
        if (null !== $this->requestsmCpu) {
            $res['RequestsmCpu'] = $this->requestsmCpu;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->runtimeClassName) {
            $res['RuntimeClassName'] = $this->runtimeClassName;
        }
        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }
        if (null !== $this->serviceConfigs) {
            $res['ServiceConfigs'] = $this->serviceConfigs;
        }
        if (null !== $this->sidecars) {
            $res['Sidecars'] = $this->sidecars;
        }
        if (null !== $this->slsConfigs) {
            $res['SlsConfigs'] = $this->slsConfigs;
        }
        if (null !== $this->startup) {
            $res['Startup'] = $this->startup;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->terminateGracePeriod) {
            $res['TerminateGracePeriod'] = $this->terminateGracePeriod;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->uriEncoding) {
            $res['UriEncoding'] = $this->uriEncoding;
        }
        if (null !== $this->useBodyEncoding) {
            $res['UseBodyEncoding'] = $this->useBodyEncoding;
        }
        if (null !== $this->userBaseImageUrl) {
            $res['UserBaseImageUrl'] = $this->userBaseImageUrl;
        }
        if (null !== $this->webContainer) {
            $res['WebContainer'] = $this->webContainer;
        }
        if (null !== $this->webContainerConfig) {
            $res['WebContainerConfig'] = $this->webContainerConfig;
        }
        if (null !== $this->workloadType) {
            $res['WorkloadType'] = $this->workloadType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertK8sApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Annotations'])) {
            $model->annotations = $map['Annotations'];
        }
        if (isset($map['AppConfig'])) {
            $model->appConfig = $map['AppConfig'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppTemplateName'])) {
            $model->appTemplateName = $map['AppTemplateName'];
        }
        if (isset($map['ApplicationDescription'])) {
            $model->applicationDescription = $map['ApplicationDescription'];
        }
        if (isset($map['BuildPackId'])) {
            $model->buildPackId = $map['BuildPackId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['CommandArgs'])) {
            $model->commandArgs = $map['CommandArgs'];
        }
        if (isset($map['ConfigMountDescs'])) {
            $model->configMountDescs = $map['ConfigMountDescs'];
        }
        if (isset($map['ContainerRegistryId'])) {
            $model->containerRegistryId = $map['ContainerRegistryId'];
        }
        if (isset($map['CsClusterId'])) {
            $model->csClusterId = $map['CsClusterId'];
        }
        if (isset($map['CustomAffinity'])) {
            $model->customAffinity = $map['CustomAffinity'];
        }
        if (isset($map['CustomAgentVersion'])) {
            $model->customAgentVersion = $map['CustomAgentVersion'];
        }
        if (isset($map['CustomTolerations'])) {
            $model->customTolerations = $map['CustomTolerations'];
        }
        if (isset($map['DeployAcrossNodes'])) {
            $model->deployAcrossNodes = $map['DeployAcrossNodes'];
        }
        if (isset($map['DeployAcrossZones'])) {
            $model->deployAcrossZones = $map['DeployAcrossZones'];
        }
        if (isset($map['EdasContainerVersion'])) {
            $model->edasContainerVersion = $map['EdasContainerVersion'];
        }
        if (isset($map['EmptyDirs'])) {
            $model->emptyDirs = $map['EmptyDirs'];
        }
        if (isset($map['EnableAhas'])) {
            $model->enableAhas = $map['EnableAhas'];
        }
        if (isset($map['EnableAsm'])) {
            $model->enableAsm = $map['EnableAsm'];
        }
        if (isset($map['EnableEmptyPushReject'])) {
            $model->enableEmptyPushReject = $map['EnableEmptyPushReject'];
        }
        if (isset($map['EnableLosslessRule'])) {
            $model->enableLosslessRule = $map['EnableLosslessRule'];
        }
        if (isset($map['EnvFroms'])) {
            $model->envFroms = $map['EnvFroms'];
        }
        if (isset($map['Envs'])) {
            $model->envs = $map['Envs'];
        }
        if (isset($map['FeatureConfig'])) {
            $model->featureConfig = $map['FeatureConfig'];
        }
        if (isset($map['ImagePlatforms'])) {
            $model->imagePlatforms = $map['ImagePlatforms'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['InitContainers'])) {
            $model->initContainers = $map['InitContainers'];
        }
        if (isset($map['InternetSlbId'])) {
            $model->internetSlbId = $map['InternetSlbId'];
        }
        if (isset($map['InternetSlbPort'])) {
            $model->internetSlbPort = $map['InternetSlbPort'];
        }
        if (isset($map['InternetSlbProtocol'])) {
            $model->internetSlbProtocol = $map['InternetSlbProtocol'];
        }
        if (isset($map['InternetTargetPort'])) {
            $model->internetTargetPort = $map['InternetTargetPort'];
        }
        if (isset($map['IntranetSlbId'])) {
            $model->intranetSlbId = $map['IntranetSlbId'];
        }
        if (isset($map['IntranetSlbPort'])) {
            $model->intranetSlbPort = $map['IntranetSlbPort'];
        }
        if (isset($map['IntranetSlbProtocol'])) {
            $model->intranetSlbProtocol = $map['IntranetSlbProtocol'];
        }
        if (isset($map['IntranetTargetPort'])) {
            $model->intranetTargetPort = $map['IntranetTargetPort'];
        }
        if (isset($map['IsMultilingualApp'])) {
            $model->isMultilingualApp = $map['IsMultilingualApp'];
        }
        if (isset($map['JDK'])) {
            $model->JDK = $map['JDK'];
        }
        if (isset($map['JavaStartUpConfig'])) {
            $model->javaStartUpConfig = $map['JavaStartUpConfig'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['LimitCpu'])) {
            $model->limitCpu = $map['LimitCpu'];
        }
        if (isset($map['LimitEphemeralStorage'])) {
            $model->limitEphemeralStorage = $map['LimitEphemeralStorage'];
        }
        if (isset($map['LimitMem'])) {
            $model->limitMem = $map['LimitMem'];
        }
        if (isset($map['LimitmCpu'])) {
            $model->limitmCpu = $map['LimitmCpu'];
        }
        if (isset($map['Liveness'])) {
            $model->liveness = $map['Liveness'];
        }
        if (isset($map['LocalVolume'])) {
            $model->localVolume = $map['LocalVolume'];
        }
        if (isset($map['LogicalRegionId'])) {
            $model->logicalRegionId = $map['LogicalRegionId'];
        }
        if (isset($map['LosslessRuleAligned'])) {
            $model->losslessRuleAligned = $map['LosslessRuleAligned'];
        }
        if (isset($map['LosslessRuleDelayTime'])) {
            $model->losslessRuleDelayTime = $map['LosslessRuleDelayTime'];
        }
        if (isset($map['LosslessRuleFuncType'])) {
            $model->losslessRuleFuncType = $map['LosslessRuleFuncType'];
        }
        if (isset($map['LosslessRuleRelated'])) {
            $model->losslessRuleRelated = $map['LosslessRuleRelated'];
        }
        if (isset($map['LosslessRuleWarmupTime'])) {
            $model->losslessRuleWarmupTime = $map['LosslessRuleWarmupTime'];
        }
        if (isset($map['MountDescs'])) {
            $model->mountDescs = $map['MountDescs'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NasId'])) {
            $model->nasId = $map['NasId'];
        }
        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }
        if (isset($map['PackageUrl'])) {
            $model->packageUrl = $map['PackageUrl'];
        }
        if (isset($map['PackageVersion'])) {
            $model->packageVersion = $map['PackageVersion'];
        }
        if (isset($map['PostStart'])) {
            $model->postStart = $map['PostStart'];
        }
        if (isset($map['PreStop'])) {
            $model->preStop = $map['PreStop'];
        }
        if (isset($map['PvcMountDescs'])) {
            $model->pvcMountDescs = $map['PvcMountDescs'];
        }
        if (isset($map['Readiness'])) {
            $model->readiness = $map['Readiness'];
        }
        if (isset($map['Replicas'])) {
            $model->replicas = $map['Replicas'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }
        if (isset($map['RequestsCpu'])) {
            $model->requestsCpu = $map['RequestsCpu'];
        }
        if (isset($map['RequestsEphemeralStorage'])) {
            $model->requestsEphemeralStorage = $map['RequestsEphemeralStorage'];
        }
        if (isset($map['RequestsMem'])) {
            $model->requestsMem = $map['RequestsMem'];
        }
        if (isset($map['RequestsmCpu'])) {
            $model->requestsmCpu = $map['RequestsmCpu'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RuntimeClassName'])) {
            $model->runtimeClassName = $map['RuntimeClassName'];
        }
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }
        if (isset($map['ServiceConfigs'])) {
            $model->serviceConfigs = $map['ServiceConfigs'];
        }
        if (isset($map['Sidecars'])) {
            $model->sidecars = $map['Sidecars'];
        }
        if (isset($map['SlsConfigs'])) {
            $model->slsConfigs = $map['SlsConfigs'];
        }
        if (isset($map['Startup'])) {
            $model->startup = $map['Startup'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['TerminateGracePeriod'])) {
            $model->terminateGracePeriod = $map['TerminateGracePeriod'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['UriEncoding'])) {
            $model->uriEncoding = $map['UriEncoding'];
        }
        if (isset($map['UseBodyEncoding'])) {
            $model->useBodyEncoding = $map['UseBodyEncoding'];
        }
        if (isset($map['UserBaseImageUrl'])) {
            $model->userBaseImageUrl = $map['UserBaseImageUrl'];
        }
        if (isset($map['WebContainer'])) {
            $model->webContainer = $map['WebContainer'];
        }
        if (isset($map['WebContainerConfig'])) {
            $model->webContainerConfig = $map['WebContainerConfig'];
        }
        if (isset($map['WorkloadType'])) {
            $model->workloadType = $map['WorkloadType'];
        }

        return $model;
    }
}
