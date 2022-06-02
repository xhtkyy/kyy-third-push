<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/third_push.proto

namespace ThirdPush;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>thirdPush.Action</code>
 */
class Action extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.thirdPush.ActionType type = 1;</code>
     */
    protected $type = 0;
    /**
     * Generated from protobuf field <code>string url = 2;</code>
     */
    protected $url = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *     @type string $url
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\ThirdPush::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.thirdPush.ActionType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.thirdPush.ActionType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \ThirdPush\ActionType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string url = 2;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Generated from protobuf field <code>string url = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

}
