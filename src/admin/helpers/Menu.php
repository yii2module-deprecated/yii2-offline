<?php

namespace yii2module\offline\admin\helpers;

use common\enums\rbac\PermissionEnum;
use yii2lab\extension\menu\interfaces\MenuInterface;

class Menu implements MenuInterface {
	
	public function toArray() {
		return [
			'label' => ['offline/main', 'title'],
			'url' => 'offline',
			'module' => 'offline',
			//'icon' => 'power-off',
			'access' => PermissionEnum::OFFLINE_MANAGE,
		];
	}

}
