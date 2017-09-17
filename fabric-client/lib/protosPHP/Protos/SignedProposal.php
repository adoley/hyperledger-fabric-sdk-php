<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: peer/proposal.proto

namespace Protos;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * This structure is necessary to sign the proposal which contains the header
 * and the payload. Without this structure, we would have to concatenate the
 * header and the payload to verify the signature, which could be expensive
 * with large payload
 * When an endorser receives a SignedProposal message, it should verify the
 * signature over the proposal bytes. This verification requires the following
 * steps:
 * 1. Verification of the validity of the certificate that was used to produce
 *    the signature.  The certificate will be available once proposalBytes has
 *    been unmarshalled to a Proposal message, and Proposal.header has been
 *    unmarshalled to a Header message. While this unmarshalling-before-verifying
 *    might not be ideal, it is unavoidable because i) the signature needs to also
 *    protect the signing certificate; ii) it is desirable that Header is created
 *    once by the client and never changed (for the sake of accountability and
 *    non-repudiation). Note also that it is actually impossible to conclusively
 *    verify the validity of the certificate included in a Proposal, because the
 *    proposal needs to first be endorsed and ordered with respect to certificate
 *    expiration transactions. Still, it is useful to pre-filter expired
 *    certificates at this stage.
 * 2. Verification that the certificate is trusted (signed by a trusted CA) and
 *    that it is allowed to transact with us (with respect to some ACLs);
 * 3. Verification that the signature on proposalBytes is valid;
 * 4. Detect replay attacks;
 * </pre>
 *
 * Protobuf type <code>protos.SignedProposal</code>
 */
class SignedProposal extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The bytes of Proposal
     * </pre>
     *
     * <code>bytes proposal_bytes = 1;</code>
     */
    private $proposal_bytes = '';
    /**
     * <pre>
     * Signaure over proposalBytes; this signature is to be verified against
     * the creator identity contained in the header of the Proposal message
     * marshaled as proposalBytes
     * </pre>
     *
     * <code>bytes signature = 2;</code>
     */
    private $signature = '';

    public function __construct() {
        \GPBMetadata\Peer\Proposal::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The bytes of Proposal
     * </pre>
     *
     * <code>bytes proposal_bytes = 1;</code>
     */
    public function getProposalBytes()
    {
        return $this->proposal_bytes;
    }

    /**
     * <pre>
     * The bytes of Proposal
     * </pre>
     *
     * <code>bytes proposal_bytes = 1;</code>
     */
    public function setProposalBytes($var)
    {
        GPBUtil::checkString($var, False);
        $this->proposal_bytes = $var;
    }

    /**
     * <pre>
     * Signaure over proposalBytes; this signature is to be verified against
     * the creator identity contained in the header of the Proposal message
     * marshaled as proposalBytes
     * </pre>
     *
     * <code>bytes signature = 2;</code>
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * <pre>
     * Signaure over proposalBytes; this signature is to be verified against
     * the creator identity contained in the header of the Proposal message
     * marshaled as proposalBytes
     * </pre>
     *
     * <code>bytes signature = 2;</code>
     */
    public function setSignature($var)
    {
        GPBUtil::checkString($var, False);
        $this->signature = $var;
    }

}

