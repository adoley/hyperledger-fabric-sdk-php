<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/policies.proto

namespace Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * ImplicitMetaPolicy is a policy type which depends on the hierarchical nature of the configuration
 * It is implicit because the rule is generate implicitly based on the number of sub policies
 * It is meta because it depends only on the result of other policies
 * When evaluated, this policy iterates over all immediate child sub-groups, retrieves the policy
 * of name sub_policy, evaluates the collection and applies the rule.
 * For example, with 4 sub-groups, and a policy name of "foo", ImplicitMetaPolicy retrieves
 * each sub-group, retrieves policy "foo" for each subgroup, evaluates it, and, in the case of ANY
 * 1 satisfied is sufficient, ALL would require 4 signatures, and MAJORITY would require 3 signatures.
 * </pre>
 *
 * Protobuf type <code>common.ImplicitMetaPolicy</code>
 */
class ImplicitMetaPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string sub_policy = 1;</code>
     */
    private $sub_policy = '';
    /**
     * <code>.common.ImplicitMetaPolicy.Rule rule = 2;</code>
     */
    private $rule = 0;

    public function __construct() {
        \GPBMetadata\Common\Policies::initOnce();
        parent::__construct();
    }

    /**
     * <code>string sub_policy = 1;</code>
     */
    public function getSubPolicy()
    {
        return $this->sub_policy;
    }

    /**
     * <code>string sub_policy = 1;</code>
     */
    public function setSubPolicy($var)
    {
        GPBUtil::checkString($var, True);
        $this->sub_policy = $var;
    }

    /**
     * <code>.common.ImplicitMetaPolicy.Rule rule = 2;</code>
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * <code>.common.ImplicitMetaPolicy.Rule rule = 2;</code>
     */
    public function setRule($var)
    {
        GPBUtil::checkEnum($var, \Common\ImplicitMetaPolicy_Rule::class);
        $this->rule = $var;
    }

}
