<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: orderer/configuration.proto

namespace Orderer;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>orderer.ConsensusType</code>
 */
class ConsensusType extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string type = 1;</code>
     */
    private $type = '';

    public function __construct() {
        \GPBMetadata\Orderer\Configuration::initOnce();
        parent::__construct();
    }

    /**
     * <code>string type = 1;</code>
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * <code>string type = 1;</code>
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;
    }

}

