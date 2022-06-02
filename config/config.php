<?php

return [
    "channel"      => env("THIRD_PUSH_CHANNEL", \ThirdPush\Channel::TPNS),
    "env"          => env("THIRD_PUSH_ENV", \ThirdPush\Env::DEV),
    "platform"     => env("THIRD_PUSH_PLATFORM", \ThirdPush\Platform::ALL),
    "sound"        => "default.mp3",
    "message_type" => "notify",
    "hostname"     => env("THIRD_PUSH_HOSTNAME", ""),
    "app"          => [
        \ThirdPush\APP::SEAT_APP => [
            "action_type" => \ThirdPush\ActionType::INTENT,
            "action_url"  => "intent:#Intent;component=com.xht.kuaiyouyi/com.kuaiyouyi.im.MainActivity;end"
        ],
        \ThirdPush\APP::MALL_APP => [
            "action_type" => \ThirdPush\ActionType::INTENT,
            "action_url"  => "intent:#Intent;component=com.xht.kuaiyouyi/com.kuaiyouyi.buyer_app.MainActivity;end"
        ],
    ]
];