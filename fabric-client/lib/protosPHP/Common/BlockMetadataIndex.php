<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/common.proto

namespace Common;

/**
 * <pre>
 * This enum enlists indexes of the block metadata array
 * </pre>
 *
 * Protobuf enum <code>common.BlockMetadataIndex</code>
 */
class BlockMetadataIndex
{
    /**
     * <pre>
     * Block metadata array position for block signatures
     * </pre>
     *
     * <code>SIGNATURES = 0;</code>
     */
    const SIGNATURES = 0;
    /**
     * <pre>
     * Block metadata array position to store last configuration block sequence number
     * </pre>
     *
     * <code>LAST_CONFIG = 1;</code>
     */
    const LAST_CONFIG = 1;
    /**
     * <pre>
     * Block metadata array position to store serialized bit array filter of invalid transactions
     * </pre>
     *
     * <code>TRANSACTIONS_FILTER = 2;</code>
     */
    const TRANSACTIONS_FILTER = 2;
    /**
     * <pre>
     * Block metadata array position to store operational metadata for orderers
     * </pre>
     *
     * <code>ORDERER = 3;</code>
     */
    const ORDERER = 3;
}

