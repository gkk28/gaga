<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: platform/api_site_mute.proto

namespace Zaly\Proto\Platform;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * action: api.site.mute
 *
 * Generated from protobuf message <code>platform.ApiSiteMuteRequest</code>
 */
class ApiSiteMuteRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *code = sha1(pubkPem)
     *
     * Generated from protobuf field <code>string siteCode = 1;</code>
     */
    private $siteCode = '';
    /**
     *site userId
     *
     * Generated from protobuf field <code>string siteUserId = 2;</code>
     */
    private $siteUserId = '';
    /**
     *is mute value
     *
     * Generated from protobuf field <code>bool isMute = 3;</code>
     */
    private $isMute = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $siteCode
     *          code = sha1(pubkPem)
     *     @type string $siteUserId
     *          site userId
     *     @type bool $isMute
     *          is mute value
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Platform\ApiSiteMute::initOnce();
        parent::__construct($data);
    }

    /**
     *code = sha1(pubkPem)
     *
     * Generated from protobuf field <code>string siteCode = 1;</code>
     * @return string
     */
    public function getSiteCode()
    {
        return $this->siteCode;
    }

    /**
     *code = sha1(pubkPem)
     *
     * Generated from protobuf field <code>string siteCode = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSiteCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->siteCode = $var;

        return $this;
    }

    /**
     *site userId
     *
     * Generated from protobuf field <code>string siteUserId = 2;</code>
     * @return string
     */
    public function getSiteUserId()
    {
        return $this->siteUserId;
    }

    /**
     *site userId
     *
     * Generated from protobuf field <code>string siteUserId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSiteUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->siteUserId = $var;

        return $this;
    }

    /**
     *is mute value
     *
     * Generated from protobuf field <code>bool isMute = 3;</code>
     * @return bool
     */
    public function getIsMute()
    {
        return $this->isMute;
    }

    /**
     *is mute value
     *
     * Generated from protobuf field <code>bool isMute = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsMute($var)
    {
        GPBUtil::checkBool($var);
        $this->isMute = $var;

        return $this;
    }

}

