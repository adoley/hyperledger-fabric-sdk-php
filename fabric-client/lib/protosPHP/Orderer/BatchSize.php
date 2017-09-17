<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: orderer/configuration.proto

namespace Orderer;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>orderer.BatchSize</code>
 */
class BatchSize extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Simply specified as number of messages for now, in the future
     * we may want to allow this to be specified by size in bytes
     * </pre>
     *
     * <code>uint32 max_message_count = 1;</code>
     */
    private $max_message_count = 0;
    /**
     * <pre>
     * The byte count of the serialized messages in a batch cannot
     * exceed this value.
     * </pre>
     *
     * <code>uint32 absolute_max_bytes = 2;</code>
     */
    private $absolute_max_bytes = 0;
    /**
     * <pre>
     * The byte count of the serialized messages in a batch should not
     * exceed this value.
     * </pre>
     *
     * <code>uint32 preferred_max_bytes = 3;</code>
     */
    private $preferred_max_bytes = 0;

    public function __construct() {
        \GPBMetadata\Orderer\Configuration::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Simply specified as number of messages for now, in the future
     * we may want to allow this to be specified by size in bytes
     * </pre>
     *
     * <code>uint32 max_message_count = 1;</code>
     */
    public function getMaxMessageCount()
    {
        return $this->max_message_count;
    }

    /**
     * <pre>
     * Simply specified as number of messages for now, in the future
     * we may want to allow this to be specified by size in bytes
     * </pre>
     *
     * <code>uint32 max_message_count = 1;</code>
     */
    public function setMaxMessageCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->max_message_count = $var;
    }

    /**
     * <pre>
     * The byte count of the serialized messages in a batch cannot
     * exceed this value.
     * </pre>
     *
     * <code>uint32 absolute_max_bytes = 2;</code>
     */
    public function getAbsoluteMaxBytes()
    {
        return $this->absolute_max_bytes;
    }

    /**
     * <pre>
     * The byte count of the serialized messages in a batch cannot
     * exceed this value.
     * </pre>
     *
     * <code>uint32 absolute_max_bytes = 2;</code>
     */
    public function setAbsoluteMaxBytes($var)
    {
        GPBUtil::checkUint32($var);
        $this->absolute_max_bytes = $var;
    }

    /**
     * <pre>
     * The byte count of the serialized messages in a batch should not
     * exceed this value.
     * </pre>
     *
     * <code>uint32 preferred_max_bytes = 3;</code>
     */
    public function getPreferredMaxBytes()
    {
        return $this->preferred_max_bytes;
    }

    /**
     * <pre>
     * The byte count of the serialized messages in a batch should not
     * exceed this value.
     * </pre>
     *
     * <code>uint32 preferred_max_bytes = 3;</code>
     */
    public function setPreferredMaxBytes($var)
    {
        GPBUtil::checkUint32($var);
        $this->preferred_max_bytes = $var;
    }

}

