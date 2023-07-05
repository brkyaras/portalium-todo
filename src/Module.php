<?php

namespace brkyaras\todo;

use portalium\base\Event;
use {{vendor}}\{{package}}\components\TriggerActions;

class Module extends \portalium\base\Module
{
    public static $tablePrefix = '{{package}}_';
    
    public static $name = '{{package}}';

    public static $description = '{{package}} Module';

    public $apiRules = [
        [
            'class' => 'yii\rest\UrlRule',
            'controller' => [
                'todo/default',
            ]
        ],
    ];
    
    public static function moduleInit()
    {
        self::registerTranslation('{{package}}','@brkyaras/todo/messages',[
            '{{package}}' => 'todo.php',
        ]);
    }

    public static function t($message, array $params = [])
    {
        return parent::coreT('todo', $message, $params);
    }

    /* 
        public function registerEvents()
        {
            Event::on($this::className(), UserModule::EVENT_USER_DELETE_BEFORE, [new TriggerActions(), 'onUserDeleteBefore']);
        } 
    */
}