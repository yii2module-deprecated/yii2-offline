<?php

namespace yii2module\offline\admin\helpers;

use common\enums\rbac\PermissionEnum;

class Menu {
	
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
