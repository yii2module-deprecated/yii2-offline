<?php

namespace yii2module\offline\admin\helpers;

use yii2lab\extension\menu\interfaces\MenuInterface;
use yii2module\offline\domain\enums\OfflinePermissionEnum;

class Menu implements MenuInterface {
	
	public function toArray() {
		return [
			'label' => ['offline/main', 'title'],
			'url' => 'offline',
			'module' => 'offline',
			//'icon' => 'power-off',
			'access' => OfflinePermissionEnum::MANAGE,
		];
	}

}
