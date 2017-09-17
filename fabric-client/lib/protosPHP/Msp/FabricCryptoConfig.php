<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: msp/msp_config.proto

namespace Msp;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * FabricCryptoConfig contains configuration parameters
 * for the cryptographic algorithms used by the MSP
 * this configuration refers to
 * </pre>
 *
 * Protobuf type <code>msp.FabricCryptoConfig</code>
 */
class FabricCryptoConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * SignatureHashFamily is a string representing the hash family to be used
     * during sign and verify operations.
     * Allowed values are "SHA2" and "SHA3".
     * </pre>
     *
     * <code>string signature_hash_family = 1;</code>
     */
    private $signature_hash_family = '';
    /**
     * <pre>
     * IdentityIdentifierHashFunction is a string representing the hash function
     * to be used during the computation of the identity identifier of an MSP identity.
     * Allowed values are "SHA256", "SHA384" and "SHA3_256", "SHA3_384".
     * </pre>
     *
     * <code>string identity_identifier_hash_function = 2;</code>
     */
    private $identity_identifier_hash_function = '';

    public function __construct() {
        \GPBMetadata\Msp\MspConfig::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * SignatureHashFamily is a string representing the hash family to be used
     * during sign and verify operations.
     * Allowed values are "SHA2" and "SHA3".
     * </pre>
     *
     * <code>string signature_hash_family = 1;</code>
     */
    public function getSignatureHashFamily()
    {
        return $this->signature_hash_family;
    }

    /**
     * <pre>
     * SignatureHashFamily is a string representing the hash family to be used
     * during sign and verify operations.
     * Allowed values are "SHA2" and "SHA3".
     * </pre>
     *
     * <code>string signature_hash_family = 1;</code>
     */
    public function setSignatureHashFamily($var)
    {
        GPBUtil::checkString($var, True);
        $this->signature_hash_family = $var;
    }

    /**
     * <pre>
     * IdentityIdentifierHashFunction is a string representing the hash function
     * to be used during the computation of the identity identifier of an MSP identity.
     * Allowed values are "SHA256", "SHA384" and "SHA3_256", "SHA3_384".
     * </pre>
     *
     * <code>string identity_identifier_hash_function = 2;</code>
     */
    public function getIdentityIdentifierHashFunction()
    {
        return $this->identity_identifier_hash_function;
    }

    /**
     * <pre>
     * IdentityIdentifierHashFunction is a string representing the hash function
     * to be used during the computation of the identity identifier of an MSP identity.
     * Allowed values are "SHA256", "SHA384" and "SHA3_256", "SHA3_384".
     * </pre>
     *
     * <code>string identity_identifier_hash_function = 2;</code>
     */
    public function setIdentityIdentifierHashFunction($var)
    {
        GPBUtil::checkString($var, True);
        $this->identity_identifier_hash_function = $var;
    }

}

