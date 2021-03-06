<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: platform/api_push_check.proto

namespace Zaly\Proto\Platform;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>platform.ApiPushCheckResponse</code>
 */
class ApiPushCheckResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *push mark()
     *
     * Generated from protobuf field <code>string pushMark = 1;</code>
     */
    private $pushMark = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $pushMark
     *          push mark()
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Platform\ApiPushCheck::initOnce();
        parent::__construct($data);
    }

    /**
     *push mark()
     *
     * Generated from protobuf field <code>string pushMark = 1;</code>
     * @return string
     */
    public function getPushMark()
    {
        return $this->pushMark;
    }

    /**
     *push mark()
     *
     * Generated from protobuf field <code>string pushMark = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPushMark($var)
    {
        GPBUtil::checkString($var, True);
        $this->pushMark = $var;

        return $this;
    }

}

