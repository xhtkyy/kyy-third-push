<?php

namespace KyyPush\exception;

class KyyThirdPushException extends \Exception {
    protected $message = "第三方推送请求失败";
}