<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: CanalProtocol.proto

namespace Com\Alibaba\Otter\Canal\Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Unsubscription
 *
 * Generated from protobuf message <code>com.alibaba.otter.canal.protocol.Unsub</code>
 */
class Unsub extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string destination = 1;</code>
     */
    protected $destination = '';
    /**
     * Generated from protobuf field <code>string client_id = 2;</code>
     */
    protected $client_id = '';
    /**
     * Generated from protobuf field <code>string filter = 7;</code>
     */
    protected $filter = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $destination
     *     @type string $client_id
     *     @type string $filter
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\CanalProtocol::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string destination = 1;</code>
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Generated from protobuf field <code>string destination = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDestination($var)
    {
        GPBUtil::checkString($var, True);
        $this->destination = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string client_id = 2;</code>
     * @return string
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * Generated from protobuf field <code>string client_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setClientId($var)
    {
        GPBUtil::checkString($var, True);
        $this->client_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string filter = 7;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Generated from protobuf field <code>string filter = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

}

