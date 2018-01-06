<?php

namespace yii2module\offline\admin\helpers;

// todo: отрефакторить - сделать нормальный интерфейс и родителя

use common\enums\rbac\PermissionEnum;

class Menu {
	
	static function getMenu() {
		return [
			'label' => ['offline/main', 'title'],
			'url' => 'offline',
			'module' => 'offline',
			//'icon' => 'power-off',
			'access' => PermissionEnum::OFFLINE_MANAGE,
		];
	}

}
