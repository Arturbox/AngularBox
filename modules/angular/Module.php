<?php

namespace modules\angular;

/**
 * site module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'modules\angular\controllers';



    /**
     * @inheritdoc
     */
    public function init()
    {

        parent::init();
            $this->setViewPath('@modules/angular/views');
    }
}
