<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: peer/proposal.proto

namespace Hyperledger\Fabric\Protos\Peer;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ChaincodeAction contains the actions the events generated by the execution
 * of the chaincode.
 *
 * Generated from protobuf message <code>protos.ChaincodeAction</code>
 */
class ChaincodeAction extends \Google\Protobuf\Internal\Message
{
    /**
     * This field contains the read set and the write set produced by the
     * chaincode executing this invocation.
     *
     * Generated from protobuf field <code>bytes results = 1;</code>
     */
    private $results = '';
    /**
     * This field contains the events generated by the chaincode executing this
     * invocation.
     *
     * Generated from protobuf field <code>bytes events = 2;</code>
     */
    private $events = '';
    /**
     * This field contains the result of executing this invocation.
     *
     * Generated from protobuf field <code>.protos.Response response = 3;</code>
     */
    private $response = null;

    public function __construct() {
        \GPBMetadata\Peer\Proposal::initOnce();
        parent::__construct();
    }

    /**
     * This field contains the read set and the write set produced by the
     * chaincode executing this invocation.
     *
     * Generated from protobuf field <code>bytes results = 1;</code>
     * @return string
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * This field contains the read set and the write set produced by the
     * chaincode executing this invocation.
     *
     * Generated from protobuf field <code>bytes results = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResults($var)
    {
        GPBUtil::checkString($var, False);
        $this->results = $var;

        return $this;
    }

    /**
     * This field contains the events generated by the chaincode executing this
     * invocation.
     *
     * Generated from protobuf field <code>bytes events = 2;</code>
     * @return string
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * This field contains the events generated by the chaincode executing this
     * invocation.
     *
     * Generated from protobuf field <code>bytes events = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEvents($var)
    {
        GPBUtil::checkString($var, False);
        $this->events = $var;

        return $this;
    }

    /**
     * This field contains the result of executing this invocation.
     *
     * Generated from protobuf field <code>.protos.Response response = 3;</code>
     * @return \Hyperledger\Fabric\Protos\Peer\Response
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * This field contains the result of executing this invocation.
     *
     * Generated from protobuf field <code>.protos.Response response = 3;</code>
     * @param \Hyperledger\Fabric\Protos\Peer\Response $var
     * @return $this
     */
    public function setResponse($var)
    {
        GPBUtil::checkMessage($var, \Hyperledger\Fabric\Protos\Peer\Response::class);
        $this->response = $var;

        return $this;
    }

}
