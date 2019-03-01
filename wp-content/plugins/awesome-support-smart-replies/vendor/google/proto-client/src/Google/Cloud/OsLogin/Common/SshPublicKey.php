<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oslogin/common/common.proto

namespace Google\Cloud\OsLogin\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The SSH public key information associated with a Google account.
 *
 * Generated from protobuf message <code>google.cloud.oslogin.common.SshPublicKey</code>
 */
class SshPublicKey extends \Google\Protobuf\Internal\Message
{
    /**
     * Public key text in SSH format, defined by
     * <a href="https://www.ietf.org/rfc/rfc4253.txt" target="_blank">RFC4253</a>
     * section 6.6.
     *
     * Generated from protobuf field <code>string key = 1;</code>
     */
    private $key = '';
    /**
     * An expiration time in microseconds since epoch.
     *
     * Generated from protobuf field <code>int64 expiration_time_usec = 2;</code>
     */
    private $expiration_time_usec = 0;
    /**
     * Output only. The SHA-256 fingerprint of the SSH public key.
     *
     * Generated from protobuf field <code>string fingerprint = 3;</code>
     */
    private $fingerprint = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Oslogin\Common\Common::initOnce();
        parent::__construct();
    }

    /**
     * Public key text in SSH format, defined by
     * <a href="https://www.ietf.org/rfc/rfc4253.txt" target="_blank">RFC4253</a>
     * section 6.6.
     *
     * Generated from protobuf field <code>string key = 1;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Public key text in SSH format, defined by
     * <a href="https://www.ietf.org/rfc/rfc4253.txt" target="_blank">RFC4253</a>
     * section 6.6.
     *
     * Generated from protobuf field <code>string key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

    /**
     * An expiration time in microseconds since epoch.
     *
     * Generated from protobuf field <code>int64 expiration_time_usec = 2;</code>
     * @return int|string
     */
    public function getExpirationTimeUsec()
    {
        return $this->expiration_time_usec;
    }

    /**
     * An expiration time in microseconds since epoch.
     *
     * Generated from protobuf field <code>int64 expiration_time_usec = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setExpirationTimeUsec($var)
    {
        GPBUtil::checkInt64($var);
        $this->expiration_time_usec = $var;

        return $this;
    }

    /**
     * Output only. The SHA-256 fingerprint of the SSH public key.
     *
     * Generated from protobuf field <code>string fingerprint = 3;</code>
     * @return string
     */
    public function getFingerprint()
    {
        return $this->fingerprint;
    }

    /**
     * Output only. The SHA-256 fingerprint of the SSH public key.
     *
     * Generated from protobuf field <code>string fingerprint = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFingerprint($var)
    {
        GPBUtil::checkString($var, True);
        $this->fingerprint = $var;

        return $this;
    }

}

