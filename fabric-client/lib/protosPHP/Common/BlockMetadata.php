<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/common.proto

namespace Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>common.BlockMetadata</code>
 */
class BlockMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>repeated bytes metadata = 1;</code>
     */
    private $metadata;

    public function __construct() {
        \GPBMetadata\Common\Common::initOnce();
        parent::__construct();
    }

    /**
     * <code>repeated bytes metadata = 1;</code>
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * <code>repeated bytes metadata = 1;</code>
     */
    public function setMetadata(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->metadata = $arr;
    }

}

