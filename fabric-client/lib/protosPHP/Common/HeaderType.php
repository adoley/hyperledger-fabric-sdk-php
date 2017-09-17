<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/common.proto

namespace Common;

/**
 * Protobuf enum <code>common.HeaderType</code>
 */
class HeaderType
{
    /**
     * <pre>
     * Used for messages which are signed but opaque
     * </pre>
     *
     * <code>MESSAGE = 0;</code>
     */
    const MESSAGE = 0;
    /**
     * <pre>
     * Used for messages which express the channel config
     * </pre>
     *
     * <code>CONFIG = 1;</code>
     */
    const CONFIG = 1;
    /**
     * <pre>
     * Used for transactions which update the channel config
     * </pre>
     *
     * <code>CONFIG_UPDATE = 2;</code>
     */
    const CONFIG_UPDATE = 2;
    /**
     * <pre>
     * Used by the SDK to submit endorser based transactions
     * </pre>
     *
     * <code>ENDORSER_TRANSACTION = 3;</code>
     */
    const ENDORSER_TRANSACTION = 3;
    /**
     * <pre>
     * Used internally by the orderer for management
     * </pre>
     *
     * <code>ORDERER_TRANSACTION = 4;</code>
     */
    const ORDERER_TRANSACTION = 4;
    /**
     * <pre>
     * Used as the type for Envelope messages submitted to instruct the Deliver API to seek
     * </pre>
     *
     * <code>DELIVER_SEEK_INFO = 5;</code>
     */
    const DELIVER_SEEK_INFO = 5;
    /**
     * <pre>
     * Used for packaging chaincode artifacts for install
     * </pre>
     *
     * <code>CHAINCODE_PACKAGE = 6;</code>
     */
    const CHAINCODE_PACKAGE = 6;
}

