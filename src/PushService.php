<?php

namespace KyyPush;

use Illuminate\Contracts\Config\Repository;
use Illuminate\Support\Facades\Config;
use KyyPush\exception\KyyThirdPushException;
use ThirdPush\Action;
use ThirdPush\ActionType;
use ThirdPush\AppList;
use ThirdPush\Params;
use ThirdPush\Reply;
use ThirdPush\Users;

/**
 * 基础推送
 */
class PushService {

    protected $config = [];

    public function __construct(Repository $repository = null) {
        $this->config = $repository ? $repository->get("kyy_third_push") : Config::get("kyy_third_push");
    }

    /**
     * @param array $ids
     * @param string $title
     * @param string $content
     * @param array $extra
     * @param array $config
     * @return array
     * @throws KyyThirdPushException
     */
    public function pushToSeatApp(array $ids, string $title, string $content, array $extra = [], array $config = []): array {
        return $this->singleAppPush(\ThirdPush\APP::SEAT_APP, ...func_get_args());
    }

    /**
     * @param string $title
     * @param array $ids
     * @param string $content
     * @param array $extra
     * @param array $config
     * @return array
     * @throws KyyThirdPushException
     */
    public function pushToMallApp(array $ids, string $title, string $content, array $extra = [], array $config = []): array {
        return $this->singleAppPush(\ThirdPush\APP::MALL_APP, ...func_get_args());
    }

    /**
     * 单APP推送
     * @param int $app
     * @param string $title
     * @param array $ids
     * @param string $content
     * @param array $extra
     * @param array $config
     * @return array
     * @throws KyyThirdPushException
     */
    public function singleAppPush(int $app, array $ids, string $title, string $content, array $extra = [], array $config = []): array {
        $config = array_merge($this->config, $config);
        //用户列表
        $user_list = new AppList();
        $user_list->setApp($app);
        $users = new Users();
        $user_list->setUsers([
            $users->setId($ids)
        ]);
        //设置action
        $action = new Action();
        $action->setType($config['app'][$app]['action_type'] ?? ActionType::ACTIVITY);
        $action->setUrl($config['app'][$app]['action_url'] ?? "");
        $user_list->setAction($action);
        //构建参数
        $params = new \ThirdPush\Params();
        $params->setMessageType($config['message_type'])
            ->setChannel($config['channel'])
            ->setTitle($title)
            ->setContent($content)
            ->setEnv($config['env'])
            ->setPlatform($config['platform'])
            ->setExtra(json_encode($extra))
            ->setAppList([$user_list]);

        return $this->push($params);
    }

    /**
     * 推送
     * @param Params $params
     * @return array
     * @throws KyyThirdPushException
     */
    public function push(Params $params): array {
        /**
         * @var Reply $reply
         */
        list($reply, $status) = (new \ThirdPush\appClient(
            $this->config['hostname'] ?? '',
            [
                'credentials' => null,
            ]
        ))->push($params)->wait(); //等待
        if (!$reply) {
            throw new KyyThirdPushException();
        }
        $code    = $reply->getCode();
        $message = $reply->getMessage();
        return compact("code", "message");
    }
}