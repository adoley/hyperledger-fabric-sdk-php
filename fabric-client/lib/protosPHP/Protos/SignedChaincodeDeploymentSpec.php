<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: peer/signed_cc_dep_spec.proto

namespace Protos;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * SignedChaincodeDeploymentSpec carries the CDS along with endorsements
 * </pre>
 *
 * Protobuf type <code>protos.SignedChaincodeDeploymentSpec</code>
 */
class SignedChaincodeDeploymentSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * This is the bytes of the ChaincodeDeploymentSpec
     * </pre>
     *
     * <code>bytes chaincode_deployment_spec = 1;</code>
     */
    private $chaincode_deployment_spec = '';
    /**
     * <pre>
     * This is the instantiation policy which is identical in structure
     * to endorsement policy.  This policy is checked by the VSCC at commit
     * time on the instantiation (all peers will get the same policy as it
     * will be part of the LSCC instantation record and will be part of the
     * hash as well)
     * </pre>
     *
     * <code>bytes instantiation_policy = 2;</code>
     */
    private $instantiation_policy = '';
    /**
     * <pre>
     * The endorsements of the above deployment spec, the owner's signature over
     * chaincode_deployment_spec and Endorsement.endorser.
     * </pre>
     *
     * <code>repeated .protos.Endorsement owner_endorsements = 3;</code>
     */
    private $owner_endorsements;

    public function __construct() {
        \GPBMetadata\Peer\SignedCcDepSpec::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * This is the bytes of the ChaincodeDeploymentSpec
     * </pre>
     *
     * <code>bytes chaincode_deployment_spec = 1;</code>
     */
    public function getChaincodeDeploymentSpec()
    {
        return $this->chaincode_deployment_spec;
    }

    /**
     * <pre>
     * This is the bytes of the ChaincodeDeploymentSpec
     * </pre>
     *
     * <code>bytes chaincode_deployment_spec = 1;</code>
     */
    public function setChaincodeDeploymentSpec($var)
    {
        GPBUtil::checkString($var, False);
        $this->chaincode_deployment_spec = $var;
    }

    /**
     * <pre>
     * This is the instantiation policy which is identical in structure
     * to endorsement policy.  This policy is checked by the VSCC at commit
     * time on the instantiation (all peers will get the same policy as it
     * will be part of the LSCC instantation record and will be part of the
     * hash as well)
     * </pre>
     *
     * <code>bytes instantiation_policy = 2;</code>
     */
    public function getInstantiationPolicy()
    {
        return $this->instantiation_policy;
    }

    /**
     * <pre>
     * This is the instantiation policy which is identical in structure
     * to endorsement policy.  This policy is checked by the VSCC at commit
     * time on the instantiation (all peers will get the same policy as it
     * will be part of the LSCC instantation record and will be part of the
     * hash as well)
     * </pre>
     *
     * <code>bytes instantiation_policy = 2;</code>
     */
    public function setInstantiationPolicy($var)
    {
        GPBUtil::checkString($var, False);
        $this->instantiation_policy = $var;
    }

    /**
     * <pre>
     * The endorsements of the above deployment spec, the owner's signature over
     * chaincode_deployment_spec and Endorsement.endorser.
     * </pre>
     *
     * <code>repeated .protos.Endorsement owner_endorsements = 3;</code>
     */
    public function getOwnerEndorsements()
    {
        return $this->owner_endorsements;
    }

    /**
     * <pre>
     * The endorsements of the above deployment spec, the owner's signature over
     * chaincode_deployment_spec and Endorsement.endorser.
     * </pre>
     *
     * <code>repeated .protos.Endorsement owner_endorsements = 3;</code>
     */
    public function setOwnerEndorsements(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Protos\Endorsement::class);
        $this->owner_endorsements = $arr;
    }

}

