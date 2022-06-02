<?php
// GENERATED CODE -- DO NOT EDIT!

namespace ThirdPush;

/**
 */
class appClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \ThirdPush\Params $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \ThirdPush\Reply
     */
    public function push(\ThirdPush\Params $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/thirdPush.app/push',
        $argument,
        ['\ThirdPush\Reply', 'decode'],
        $metadata, $options);
    }

}
