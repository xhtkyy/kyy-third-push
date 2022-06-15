<?php

return [
    "channel"       => env("THIRD_PUSH_CHANNEL", \ThirdPush\Channel::TPNS),
    "env"           => env("THIRD_PUSH_ENV", \ThirdPush\Env::DEV),
    "platform"      => env("THIRD_PUSH_PLATFORM", \ThirdPush\Platform::ALL),
    "sound"         => "default",//默认铃声
    "message_type"  => "notify", //消息类型
    "hostname"      => env("THIRD_PUSH_HOSTNAME", ""), //推送端口
    "check_setting" => true, //检查用户通知设置
];