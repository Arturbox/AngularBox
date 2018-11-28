<?php
namespace modules\angular;
use yii\base\BootstrapInterface;

class Bootstrap implements BootstrapInterface
{
    /**
     * @inheritdoc
     */
    public function bootstrap($app)
    {
        $app->getUrlManager()->addRules(
            [
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => ['angular' => 'angular/api'],
                    'prefix' => 'api'
                ]
            ]
        );

    }
}