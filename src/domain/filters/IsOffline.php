<?php

namespace yii2module\offline\domain\filters;

use yii\base\BaseObject;
use yii2lab\designPattern\filter\interfaces\FilterInterface;
use yii2mod\helpers\ArrayHelper;

class IsOffline extends BaseObject implements FilterInterface {

	public function run($config) {
		$exclude = ArrayHelper::getValue($config, 'params.offline.exclude', []);
		if(in_array(APP, $exclude)) {
			unset($config['catchAll']);
		}
		return $config;
	}
	
}
