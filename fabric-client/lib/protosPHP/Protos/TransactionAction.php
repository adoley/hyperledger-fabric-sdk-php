<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: peer/transaction.proto

namespace Protos;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * TransactionAction binds a proposal to its action.  The type field in the
 * header dictates the type of action to be applied to the ledger.
 * </pre>
 *
 * Protobuf type <code>protos.TransactionAction</code>
 */
class TransactionAction extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The header of the proposal action, which is the proposal header
     * </pre>
     *
     * <code>bytes header = 1;</code>
     */
    private $header = '';
    /**
     * <pre>
     * The payload of the action as defined by the type in the header For
     * chaincode, it's the bytes of ChaincodeActionPayload
     * </pre>
     *
     * <code>bytes payload = 2;</code>
     */
    private $payload = '';

    public function __construct() {
        \GPBMetadata\Peer\Transaction::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The header of the proposal action, which is the proposal header
     * </pre>
     *
     * <code>bytes header = 1;</code>
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * <pre>
     * The header of the proposal action, which is the proposal header
     * </pre>
     *
     * <code>bytes header = 1;</code>
     */
    public function setHeader($var)
    {
        GPBUtil::checkString($var, False);
        $this->header = $var;
    }

    /**
     * <pre>
     * The payload of the action as defined by the type in the header For
     * chaincode, it's the bytes of ChaincodeActionPayload
     * </pre>
     *
     * <code>bytes payload = 2;</code>
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * <pre>
     * The payload of the action as defined by the type in the header For
     * chaincode, it's the bytes of ChaincodeActionPayload
     * </pre>
     *
     * <code>bytes payload = 2;</code>
     */
    public function setPayload($var)
    {
        GPBUtil::checkString($var, False);
        $this->payload = $var;
    }

}

