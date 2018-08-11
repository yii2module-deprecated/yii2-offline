<?php

namespace yii2module\offline\admin;

use yii\base\Module as YiiModule;
use yii2lab\helpers\Behavior;
use yii2module\offline\domain\enums\OfflinePermissionEnum;

/**
 * offline module definition class
 */
class Module extends YiiModule
{

	public static $langDir = '@yii2module/offline/admin/messages';

    public function behaviors()
    {
        return [
            'access' => Behavior::access(OfflinePermissionEnum::MANAGE),
        ];
    }

}
