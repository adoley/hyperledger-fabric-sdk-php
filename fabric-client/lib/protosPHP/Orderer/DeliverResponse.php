<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: orderer/ab.proto

namespace Orderer;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>orderer.DeliverResponse</code>
 */
class DeliverResponse extends \Google\Protobuf\Internal\Message
{
    protected $Type;

    public function __construct() {
        \GPBMetadata\Orderer\Ab::initOnce();
        parent::__construct();
    }

    /**
     * <code>.common.Status status = 1;</code>
     */
    public function getStatus()
    {
        return $this->readOneof(1);
    }

    /**
     * <code>.common.Status status = 1;</code>
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Common\Status::class);
        $this->writeOneof(1, $var);
    }

    /**
     * <code>.common.Block block = 2;</code>
     */
    public function getBlock()
    {
        return $this->readOneof(2);
    }

    /**
     * <code>.common.Block block = 2;</code>
     */
    public function setBlock(&$var)
    {
        GPBUtil::checkMessage($var, \Common\Block::class);
        $this->writeOneof(2, $var);
    }

    public function getType()
    {
        return $this->whichOneof("Type");
    }

}

