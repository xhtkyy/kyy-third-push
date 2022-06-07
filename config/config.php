<?php

return [
    "channel"      => env("THIRD_PUSH_CHANNEL", \ThirdPush\Channel::TPNS),
    "env"          => env("THIRD_PUSH_ENV", \ThirdPush\Env::DEV),
    "platform"     => env("THIRD_PUSH_PLATFORM", \ThirdPush\Platform::ALL),
    "sound"        => "default.mp3",
    "message_type" => "notify",
    "hostname"     => env("THIRD_PUSH_HOSTNAME", ""),
    "app"          => []
];