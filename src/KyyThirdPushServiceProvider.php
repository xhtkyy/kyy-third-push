<?php

namespace KyyPush;

use Illuminate\Support\ServiceProvider;

class KyyThirdPushServiceProvider extends ServiceProvider {
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        // 发布配置文件
        $path = realpath(__DIR__ . '/../config/config.php');
        $this->publishes([$path => config_path('kyy_third_push.php')], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        $this->app->singleton('kyy_third_push', function ($app) {
            return $this->app->make(PushService::class, [$app['config']]);
        });
    }
}