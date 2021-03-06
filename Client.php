<?php
/**
 * @link https://github.com/nfedoseev/yii2-external-target
 * @copyright Copyright (c) 2016 Nikita Fedoseev
 * @license https://github.com/nfedoseev/yii2-external-target/blob/master/LICENSE.md
 */

namespace nfedoseev\yii2\ExternalTarget;


use Yii;
use yii\base\InvalidConfigException;

/**
 * Class Client
 * @package nfedoseev\yii2\ExternalTarget
 */
class Client {
    /**
     * @return LogClient
     * @throws \yii\base\InvalidConfigException
     */
    public static function get()
    {
        if (!Yii::$app->has('logClient')) {
            throw new InvalidConfigException('LogClient is invalid.');
        }
        return Yii::$app->logClient;
    }
} 